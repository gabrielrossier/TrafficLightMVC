<?php

require('Controllers/TrafficLightController.php');
if (isset($_GET['action'])) {
    switch ($_GET['action']) {

        case "getTrafficLight":
            $temp = getTrafficLight();
            break;
        case "nextLight":
            $temp = nextLight();
            break;
        case "nextHS":
            $temp = HSLight();
            break;
        case "":
            $temp = getTrafficLight();

        break;
    }
}
else
{
    $temp = getTrafficLight();
}

?>




<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <title>MVC</title>
    <link rel="stylesheet" media="all" href="CSS/Stylesheet.css" />
</head>

<?= $temp ?>

<body>
</body>