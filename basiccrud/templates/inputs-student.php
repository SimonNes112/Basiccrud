<?php



$voornaam = "";

if (!empty($student)) {

$voornaam = $student["voornaam"];

}
$achternaam = "";

if (!empty($student)) {

$achternaam = $student["achternaam"];

}

$email = "";

if (!empty($student)) {

$email = $student["email"];

}

$achternaam = "";

if (!empty($student)) {

$achternaam = $student["achternaam"];

}

$telefoonnummer = "";

if (!empty($student)) {

$telefoonnummer = $student["telefoonnummer"];

}

$straatnaam = "";

if (!empty($student)) {

$straatnaam = $student["straatnaam"];

}

$huisnummer = "";

if (!empty($student)) {

$huisnummer = $student["huisnummer"];

}

$huisnummer_toevoeging = "";

if (!empty($student)) {

$huisnummer_toevoeging = $student["huisnummer_toevoeging"];

}

$woonplaats = "";

if (!empty($student)) {

$woonplaats  = $student["woonplaats"];

}

$postcode = "";

if (!empty($student)) {

$postcode  = $student["postcode"];

}


?>

<input type="hidden" name="id" value="<?php echo $student["id"];?>">
<?php
include "../scripts/connectdb.php";
$sql = "SELECT * FROM klas";

$sth = $db->prepare($sql);

$sth->execute();
?>
<div class="form-group">
    <label for="klas">
        <select name="klas_id">
            <?php
            while ($row = $sth ->fetch()){
                echo '<option value="'. $row["id"]. '">';
                echo $row['code']. " -". $row['vestiging'];
                echo '</option>';
            }

            ?>
        </select>
    </label>
</div>



<div class="form-group">
    <label for="voornaam">
        Voornaam:<input type="text" value="<?php echo $voornaam;?>" class="form-control" name="voornaam" required>
    </label>
</div>
<div class="form-group">
    <label for="achternaam">
        Achternaam:<input type="text" value="<?php echo $achternaam;?>" class="form-control" name="achternaam" required>
    </label>
</div>

<div class="form-group">
    <label for="email">
        Email:<input type="text" value="<?php echo $email;?>" class="form-control" name="email" required>
    </label>
</div>

<div class="form-group">
    <label for="telefoonnummer">
        Telefoonnummer:<input type="text" value="<?php echo $telefoonnummer;?>" class="form-control" name="telefoonnummer" required>
    </label>
</div>

<div class="form-group">
    <label for="straatnaam">
        Straatnaam:<input type="text" value="<?php echo $straatnaam;?>" class="form-control" name="straatnaam" required>
    </label>
</div>

<div class="form-group">
    <label for="huisnummer">
        Huisnummer:<input type="text" value="<?php echo $huisnummer;?>" class="form-control" name="huisnummer" required>
    </label>
</div>

<div class="form-group">
    <label for="huisnummer_toevoeging">
        Huisnummer_toevoeging:<input type="text" value="<?php echo $huisnummer_toevoeging;?>" class="form-control" name="huisnummer_toevoeging">
    </label>
</div>

<div class="form-group">
    <label for="woonplaats">
        Woonplaats:<input type="text" value="<?php echo $woonplaats;?>" class="form-control" name="woonplaats" required>
    </label>
</div>

<div class="form-group">
    <label for="postcode">
        Postcode:<input type="text" value="<?php echo $postcode;?>" class="form-control" name="postcode" required>
    </label>
</div>

<div class="form-group">
    <label for="submit">
        <input type="submit" value="wijzig student" class="btn btn-primary" name="submit">
    </label>