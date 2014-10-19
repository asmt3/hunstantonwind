<?php 


$niceDate = $this->Time->format($measurement['Measurement']['date'] . ' ' . $measurement['Measurement']['time'], '%B %e, %Y %H:%M %p');

$response = array(
	'date' => $niceDate,
	'speed' => (float)$measurement['Measurement']['average_windspeed'],
	'direction' => (float)$measurement['Measurement']['wind_direction'],
	'compass' => getCompassDirection($measurement['Measurement']['wind_direction']),
	'temperature' => (float)$measurement['Measurement']['temperature'],
	'max_average_windspeed_day' => (float)$measurement['Measurement']['max_average_windspeed_day'],
);

echo json_encode($response); 




function getCompassDirection($bearing) {
     $tmp = round($bearing / 22.5);
     switch($tmp) {
          case 1:
               $direction = "NNE";
               break;
          case 2:
               $direction = "NE";
               break;
          case 3:
               $direction = "ENE";
               break;
          case 4:
               $direction = "E";
               break;
          case 5:
               $direction = "ESE";
               break;
          case 6:
               $direction = "SE";
               break;
          case 7:
               $direction = "SSE";
               break;
          case 8:
               $direction = "S";
               break;
          case 9:
               $direction = "SSW";
               break;
          case 10:
               $direction = "SW";
               break;
          case 11:
               $direction = "WSW";
               break;
          case 12:
               $direction = "W";
               break;
          case 13:
               $direction = "WNW";
               break;
          case 14:
               $direction = "NW";
               break;
          case 15:
               $direction = "NNW";
               break;
          default:
               $direction = "N";
     }
     return $direction;
}

?>