<?php 
include_once("bootstrap.php");
session_start();

$child = new Child();
$child->updateScore();