<?php

class DataSource
{
    function getdbconnect()
    {
        $servername = "localhost";
        $username = "root"; // your MySQL username
        $password = ""; // your MySQL password
        $dbname = "grocery_store"; // your database name
        $conn = new mysqli($servername, $username, $password, $dbname) or die("Couldn't connect");
        return $conn;
    }
}
?>