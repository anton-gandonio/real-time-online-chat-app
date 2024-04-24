<?php
include_once 'config.php';
$searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
$sql = mysqli_query($conn, "SELECT users WHERE fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%' ");