<?php
ob_start();
require('Controllers/TrafficLightController.php');
if (isset($_GET['action'])) {
    switch ($_GET['action']) {

        case "getTrafficLight":
            getTrafficLight();
            break;
        case "nextLight":
            nextLight();
            break;
        case "nextHS":
            HSLight();
            break;
        case "":
            getTrafficLight();
        break;
    }
}
else
{
    $temp = getTrafficLight();
}



$content=ob_get_clean();
require("Views/template.php");



?>