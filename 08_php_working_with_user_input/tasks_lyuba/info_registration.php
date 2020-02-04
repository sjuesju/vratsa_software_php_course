

<?php

if (!empty($_POST["first_name"]) && !empty($_POST["last_name"]) && !empty($_POST["Family"]) && !empty($_POST["ERN"]) && !empty($_POST["Address"]) && !empty($_POST["Education"]) && !empty($_POST["Profession"])) {

    

    $firstname = $_POST["first_name"];

    $lastname = $_POST["last_name"];

    $family = $_POST["Family"];

    $ern = $_POST["ERN"];

    $address = $_POST["Address"];

    $education = $_POST["Education"];

    $profession = $_POST["Profession"];

}	

	echo 

	"<table>"

	. "<tr><td> First name -" . $_POST["first_name"] . "</td></tr>"

	. "<tr><td> Last name - " . $_POST["last_name"] . "</td></tr>"

    . "<tr><td> Family - " . $_POST["Family"] . "</td></tr>"

    . "<tr><td> ERN - " . $_POST["ERN"] . "</td></tr>"

    . "<tr><td> Address - " . $_POST["Address"] . "</td></tr>"

    . "<tr><td> Education - " . $_POST["Education"] . "</td></tr>"

    . "<tr><td> Profession - " . $_POST["Profession"] . "</td></tr>"

    . "</table>";
?>