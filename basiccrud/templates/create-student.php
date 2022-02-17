<?php
include "./head.php";
include "../scripts/connectdb.php";
include "./functies.php";
$voornaam=$_POST['voornaam'];
$achternaam=$_POST['achternaam'];
$email =$_POST['email'];
$woonplaats = $_POST['woonplaats'];
$postcode = $_POST['postcode'];
$huisnummer_toevoeging = $_POST['huisnummer_toevoeging'];
$straatnaam = $_POST['straatnaam'];
$huisnummer = $_POST['huisnummer'];
$telefoonnummer= $_POST['telefoonnummer'];
$klas_id=$_POST['klas_id'];
if (emailcheck($email)) {
    if (postcodecheck($postcode)) {

            if (huisnummercheck($huisnummer)) {


                $sql = "INSERT INTO student(voornaam, achternaam, email,woonplaats,postcode,huisnummer_toevoeging,straatnaam,huisnummer,telefoonnummer,klas_id) VALUES (:voornaam, :achternaam,:email,:woonplaats,:postcode,:huisnummer_toevoeging,:straatnaam,:huisnummer,:telefoonnummer,:klas_id)";
                $stmt = $db->prepare($sql);
                $stmt->execute(['voornaam' => $voornaam, 'achternaam' => $achternaam, 'email' => $email, 'woonplaats' => $woonplaats, 'postcode' => $postcode, 'huisnummer_toevoeging' => $huisnummer_toevoeging, 'straatnaam' => $straatnaam, 'huisnummer' => $huisnummer, 'telefoonnummer' => $telefoonnummer,'klas_id'=>$klas_id]);
                header("Location:../students.php");
            }

    }


}
include "foot.php";



