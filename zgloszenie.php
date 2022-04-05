<?php
$db= new mysqli("localhost", "root", "", "ratownictwo");
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
//date_default_timezone_set('Europe/Lisbon');
$date=date('d-m-y h:i:s');
$id_rat=$_POST['nr_of_team'];
$id_dys=$_POST['nr_of_dispatcher'];
$addres=$_POST['addres'];
$query="INSERT INTO zgloszenia (ratownicy_id, dyspozytorzy_id,adres,pilne,czas_zgloszenia) VALUES('$id_rat','$id_dys','$addres',0,'$date')";

if ($result=$db->query($query))
{
    echo "New record created successfully";
}
else
{
    echo "Error: " ;
}
$db->close();
