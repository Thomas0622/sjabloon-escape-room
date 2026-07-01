<?php
// auteur: Vul hier je naam in
// functie: verwijder een riddle op basis van de id
include 'functions.php';

// Haal riddle uit de database
if(isset($_GET['id'])){

    // test of insert gelukt is
    if(deleteRecord($_GET['id']) == true){
        echo '<script>alert("riddle: ' . $_GET['id'] . ' is verwijderd")</script>';
        echo "<script> location.replace('index.php'); </script>";
    } else {
        echo '<script>alert("riddle is NIET verwijderd")</script>';
    }
}
?>

