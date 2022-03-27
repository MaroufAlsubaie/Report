<link rel="stylesheet" href="desigen.css?version=8">
<?php
//ربط قاعدة البيانات مع ملف php
$serberName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "report_project";

$conn = mysqli_connect($serberName, $dBUsername, $dBPassword, $dBName);
session_start();
