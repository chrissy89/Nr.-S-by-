<!DOCTYPE html>
<html lang="en">
<head>
	
    <meta charset="UTF-8">
   
    <title>min html og javascript testside</title>
</head>
<body>
    <h1 id="overskriften">træningsopgave 1</h1>
	<p id ="hestighedtekst"> hestighed pr km time</p>
	<!----start style test-->

	<style>
		input{
		margin-left: 2em;
		background-color: #ffdd;
		text-align: left;
		}
		button{
			background-color: #c28e2c;
		}
	</style>
	<!--slut af test-->

	<form><br>timer <input type="text" name="timefelt" id = "timefelt"><br> <!---vi tager en input mere for at add noget andet på vores sidee---->
		 <br>minuter<input type="text" name="minutefelt" id = "minutefelt"><br>
		 <br>sekunder <input type="text" name="sekundefelt" id = "sekundefelt"><br>
		 <br>afstand <input type="text" name="meterfelt" id = "meterfelt"><br>
		<p id ="tekst">Din hestighed er:</p>
		
    <button type ="button" onClick="minFunktion()">beregn hestighed</button>
	</form>
	
</body>
</html>

<script>
		function minFunktion(){  
		var timer, minuter, sekunder, afstand, km, min_alt, timer_alt, hestighed;
			
		timer = document.getElementById("timefelt").value;
		minuter = document.getElementById("minutefelt").value;
		sekunder = document.getElementById("sekundefelt").value;
		afstand = document.getElementById("meterfelt").value;
		km = afstand/1000;
		min_alt=(sekunder/60) + parseInt(minuter);
		timer_alt=(min_alt/60) + parseInt(timer);
		hestighed = km/timer_alt;
		alert(hestighed);
		document.getElementById("tekst").innerHTML = "Din hestighed er: " + hestighed + " km i timer ";
		}
	</script>