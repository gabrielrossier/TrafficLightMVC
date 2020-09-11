<?php   
require('Models/TrafficLight.php');
session_start();

function getTrafficLight()
{
    ob_start();
    include('Views/TrafficLightView.php');
    $content = ob_get_clean();
    return $content;
}

function nextLight()
{
    ob_start();
    $Light = $_SESSION['myLight'];
    $Light = isset($_SESSION['myLight'])? $_SESSION['myLight'] : new TrafficLight();
    $Light->isNextRequired();
    include('Views/TrafficLightView.php');
    $content = ob_get_clean();
    return $content;
}

function HSLight()
{
    ob_start();
    $Light = $_SESSION['myLight'];
    $Light = isset($_SESSION['myLight'])? $_SESSION['myLight'] : new TrafficLight();
    $Light->requireHS();
    include('Views/TrafficLightView.php');
    $content = ob_get_clean();
    return $content;
}

?>