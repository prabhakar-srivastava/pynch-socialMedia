<?php
// Establish Connection to Database
function connect() {
    static $conn;
    if ($conn === NULL){ 
        $conn = mysqli_connect('sql210.epizy.com','epiz_32106415','krEz3LYubEL5xki','epiz_32106415_socialnetwork');
    }
    return $conn;
}

?>