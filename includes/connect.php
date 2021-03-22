<?php
    try {
        $conn = new PDO('mysql:host=localhost;dbname=databank_php', "root", "mysql");
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
?>