

<!doctype html>
<html>
<head>



<meta charset="UTF-8">
<title>API TEST JSON</title>
</head>

<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
	$place = "capetown,za";
	$json_string = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=$place&units=metric&APPID=92cc96ecfe265f251d814b66592a7848");
	$parsed_json = json_decode($json_string);
	$country = $parsed_json->sys->country;
	$wind = $parsed_json->wind->speed;
	$city = $parsed_json->name;
	$temp = $parsed_json->main->temp;
	$clouds = $parsed_json->weather[0]->description;
	if($clouds == "clear sky"){
		echo ("<img src='clearsky.png'>");
	}
?>

<table border="1px solid black">
<tr>
<td style="color:grey;">Country</td>
<td style="color:grey;"><?php echo $country;?></td>
</tr>
<tr>
<td style="color:grey;">City</td>
<td style="color:grey;"><?php echo $city;?></td>
</tr>
<tr>
<td style="color:grey;">Temperature</td>
<td style="color:grey;"><?php echo $temp;?></td>
</tr>
<tr>
<td style="color:grey;">Wind Speed M/S</td>
<td style="color:grey;"><?php echo $wind;?></td>
</tr>
<tr>
<td style="color:grey;">Cloudiness</td>
<td style="color:grey;"><?php echo $clouds;?></td>
</tr>
</table>
<!--stdClass Object ( [coord] => stdClass Object ( [lon] => 138.93 [lat] => 34.97 ) [weather] => Array ( [0] => stdClass Object ( [id] => 801 [main] => Clouds [description] => few clouds [icon] => 02n ) ) [base] => stations [main] => stdClass Object ( [temp] => 19.96 [pressure] => 1021.74 [humidity] => 100 [temp_min] => 19.96 [temp_max] => 19.96 [sea_level] => 1030.8 [grnd_level] => 1021.74 ) [wind] => stdClass Object ( [speed] => 8.96 [deg] => 35.0015 ) [clouds] => stdClass Object ( [all] => 20 ) [dt] => 1476100800 [sys] => stdClass Object ( [message] => 0.0035 [country] => JP [sunrise] => 1476045984 [sunset] => 1476087320 ) [id] => 1851632 [name] => Shuzenji [cod] => 200 )-->



</body>
</html>
