<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Json Decode and Endcode Dasar.</title>
</head>

<style>

body {
  font-family: sans-serif;
  margin: 5%;  
}



</style>

<body>

<h2>Decode Data Dari File "teman.json"</h2>
<?php

 $get_data = file_get_contents('teman.json');
 $decode_data = json_decode($get_data);
 var_dump($decode_data);


?>

<hr>

<h2>Endcode Data Inisialisasi Data Array</h2>

<?php

$teman = array(
[
    "nama" => "Dedi",
    "umur" => 24,
    "pekerjaan" => "programmer"
],

[
     "nama" => "Sany",
     "umur" => 19,
     "pekerjaan" => "desainer"
]

);

$data = json_encode($teman);
var_dump($data);

?>

<hr>



</body>

</html>

