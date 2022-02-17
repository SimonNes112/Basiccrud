<?php

$code    ="";

if (!empty($klas)) {

    $code = $klas["code"];

}
$vestiging = "";

if (!empty($klas)) {

    $vestiging = $klas["vestiging"];

}

$sectie = "";

if (!empty($klas)) {

    $sectie = $klas["sectie"];

}

$cohort = "";

if (!empty($klas)) {

    $cohort = $klas["cohort"];

}
?>
<div class="container">
        <form method="post" action="create-klas.php">
            <div class="form-group">
                <label for="Naamklas">
Naam klas:<input type="text" value="<?php echo $code;?>" class="form-control" name="code" required>
                </label>
            </div>

            <div class="form-group">
                <label for="vestiging">
vestiging:<input type="text" value="<?php echo $vestiging;?>" class="form-control" name="vestiging">
                </label>
            </div>

            <div class="form-group">
                <label for="sectie">
sectie:<input type="text" value="<?php echo $sectie;?>" class="form-control" name="sectie" required>
                </label>
            </div>

            <div class="form-group">
                <label for="cohort">
cohort:<input type="text" value="<?php echo $cohort;?>" class="form-control" name="cohort" required>
                </label>
            </div>

            <div class="form-group">
                <label for="submit">
                    <input type="submit" value="wijzig klas" class="btn btn-primary" name="submit">
                </label>




        </form>
    </div>
