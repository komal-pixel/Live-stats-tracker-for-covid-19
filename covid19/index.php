<!DOCTYPE html>
<html>
<head>
	<title>Covid-19 GLobal Live Stats</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script type="text/javascript" src="Jquery/jquery-3.5.1.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<body onload="fetchData()">
	<div class="container">
		<center><h2>COVID-19 Live Stats Tracker Website Using API</h2></center>
		<marquee>In This global pendamic we all have to team up and fight against Covid-19</marquee>
		<br><br>
		<div class="row">
			<div class="table-reponsive">
				<table class="table table-bordered table-striped table-hover text-center" id="tabval">
					<thead style="background-color: grey;">
						<tr>
						<th>Country</th>
						<th>NewConfirmed</th>
						<th>TotalConfirmed</th>
						<th>NewDeaths</th>
						<th>TotalDeaths</th>
						<th>NewRecovered</th>
						<th>TotalRecovered</th>
						<th>Date</th>

					</tr>
					</thead>
					
				</table>				
			</div>
			
		</div>
		
	</div>


	<script>
		function fetchData(){
			$.get("https://api.covid19api.com/summary",
					function(data){
						//console.log(data['Countries'].length);
				var tabval = document.getElementById('tabval')
				for(var i = 1; i<data['Countries'].length;i++){
						var x  = tabval.insertRow();

						x.insertCell(0);
						tabval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
						tabval.rows[i].cells[0].style.background = '#01142F';
						tabval.rows[i].cells[0].style.color      = '#fff';

						x.insertCell(1);
						tabval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['NewConfirmed'];
						tabval.rows[i].cells[1].style.background = '#FF6A61';

						x.insertCell(2);
						tabval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
						tabval.rows[i].cells[2].style.background = '#E20338';

						x.insertCell(3);
						tabval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['NewDeaths'];
						tabval.rows[i].cells[3].style.background = '#FF6A61';

						x.insertCell(4);
						tabval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['TotalDeaths'];
						tabval.rows[i].cells[4].style.background = '#E20338';

						x.insertCell(5);
						tabval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
						tabval.rows[i].cells[5].style.background = '#FF6A61';

						x.insertCell(6);
						tabval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['TotalRecovered'];
						tabval.rows[i].cells[6].style.background = '#E20338';

						x.insertCell(7);
						tabval.rows[i].cells[7].innerHTML = data['Countries'][i-1]['Date'];
						tabval.rows[i].cells[7].style.background = '#FF6A61';

				}

					}
				);
		}
	</script>

</body>
</html>