<?php
/**
 * Created by PhpStorm.
 * User: Dulaj Ariyaratne
 * Date: 4/8/2018
 * Time: 8:49 PM
 */

$conn = mysqli_connect('localhost','root','','project');
$query = "SELECT `auto_increment` FROM INFORMATION_SCHEMA.TABLES
WHERE table_name = 'category'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

echo str_pad($row['auto_increment'], 4, "0", STR_PAD_LEFT);;
