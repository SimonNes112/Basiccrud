<?php

include "../scripts/connectdb.php";
$voornaam=$_POST['voornaam'];
$achternaam=$_POST['achternaam'];
$id = $_POST['id'];
$email =$_POST['email'];
$woonplaats = $_POST['woonplaats'];
$postcode = $_POST['postcode'];
$huisnummer_toevoeging = $_POST['huisnummer_toevoeging'];
$straatnaam = $_POST['straatnaam'];
$telefoonnummer = $_POST['telefoonnummer'];
$huisnummer = $_POST['huisnummer'];
if (emailcheck($email)) {
    if (postcodecheck($postcode)) {

        if (huisnummercheck($huisnummer)) {

            $sql = "UPDATE student SET voornaam = :voornaam, achternaam = :achternaam, email = :email, woonplaats = :woonplaats, postcode = :postcode, huisnummer_toevoeging= :huisnummer_toevoeging, straatnaam= :straatnaam,telefoonnummer=:telefoonnummer,huisnummer=:huisnummer WHERE id = :id";
            $stmt = $db->prepare($sql);
            $stmt->execute([':voornaam' => $voornaam, ':achternaam' => $achternaam, ':email' => $email, ':woonplaats' => $woonplaats, ':postcode' => $postcode, ':huisnummer_toevoeging' => $huisnummer_toevoeging, ':straatnaam' => $straatnaam, ':telefoonnummer' => $telefoonnummer, ':huisnummer' => $huisnummer, ':id' => $id]);
            header("Location: students.php");


        }
    }


}



?>
