<?php
$row = 1;
$_POST['date'] = date('H:i:s d-m-Y');

if (($handle = fopen("messages.csv", "r")) !== FALSE) {

    while (($data = fgetcsv($handle, 2000, ",")) !== FALSE) {

        echo $data[1] . " | " . $data[0] . "<br>" . $data[2] . "<br>";
        echo "<hr>";
    }
    fclose($handle);
}