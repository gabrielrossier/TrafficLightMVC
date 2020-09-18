<?php   
require('Models/TrafficLight.php');
session_start();

function getTrafficLight()
{
    require('Views/TrafficLightView.php');

}

function nextLight()
{
    $Light = $_SESSION['myLight'];
    $Light = isset($_SESSION['myLight'])? $_SESSION['myLight'] : new TrafficLight();
    $Light->isNextRequired();
    require('Views/TrafficLightView.php');
}

function HSLight()
{
    $Light = $_SESSION['myLight'];
    $Light = isset($_SESSION['myLight'])? $_SESSION['myLight'] : new TrafficLight();
    $Light->requireHS();
    require('Views/TrafficLightView.php');

}

?>