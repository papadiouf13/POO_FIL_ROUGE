<?php 
function get_connection() {
    $conn = null;
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    

            
            $conn = new PDO("mysql:host=$servername;dbname=gestion_atelier_couture", $username, $password);


    return $conn;
}
