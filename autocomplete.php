<?php


$cari = str_replace(" ","+",$_POST['keyword']);

$json = file_get_contents("https://photon.komoot.io/api/?q=$cari&limit=5");
$data = json_decode($json, true);

echo "<ul id='country-list'>";


$sum = count($data['features']);

$count = $sum-1;

for ($i = 0; $i <= $count; $i++) {

echo "<li onClick=\"selectCountry('"
      .$data['features'][$i]['geometry']['coordinates']['1'].","
      .$data['features'][$i]['geometry']['coordinates']['0']."');\">"
      .$data['features'][$i]['properties']['name']."\r\n"
      .$data['features'][$i]['properties']['street']."\r\n"
      .$data['features'][$i]['properties']['city']."\r\n"
      .$data['features'][$i]['properties']['state']."\r\n"."</li>";

}

echo "</ul>";
