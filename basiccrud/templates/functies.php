<?php
function emailcheck($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    else{echo "Email is niet geldig";}
    return false;

}
function postcodecheck($postcode){
    if ("^[1-9][0-9]{3}\s?([a-zA-Z]{2})?$") {
        if (!preg_match("/" . "^[1-9][0-9]{3}\s?([a-zA-Z]{2})?$" . "/i", $postcode)) {
            echo "Postcode klopt niet";
            return false;
        }
        return true;

    }
}

function huisnummercheck($huisnummer){
    if (is_numeric($huisnummer)) {
        return true;
    }
    else{echo"Huisnummer moet een nummer zijn";}

    return false;

}
?>