<?php
    $email = $_POST["enrolled"];
    $ev1 = $_POST["d1"];
    $ev2 = $_POST["d2"];
    $ev3 = $_POST["d3"];

    if(empty($email)==FALSE)
    {
        echo "Thanks For Registering !";
        echo "<br>";
        echo "Details : ";
        echo "<br>";
        $strg = array($ev1,$ev2,$ev3);
        foreach($strg as $event)
        {
            echo "<br>";
            echo $event;
        }
    } 
    else{
        echo "Please enter your e-mail !";
    }
?>