<?php
    // functie: update riddle
    // auteur: Vul hier je naam in

    require_once('functions.php');

    // Test of er op de wijzig-knop is gedrukt 
    if(isset($_POST['btn_wzg'])){

        // test of update gelukt is
        if(updateRecord($_POST) == true){
            echo "<script>alert('Riddle is gewijzigd')</script>";
        } else {
            echo '<script>alert("Riddle is NIET gewijzigd")</script>';
        }
    }

    // Test of id is meegegeven in de URL
    if(isset($_GET['id'])){  
        // Haal alle info van de betreffende id $_GET['id']
        $id = $_GET['id'];
        $row = getRecord($id);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Wijzig Riddle</title>
</head>
<body>
  <h2>Wijzig Riddle</h2>
  <form method="post">
    
    <input type="text" id="roomid" name="roomid" required value="<?php echo $row['roomid']; ?>"><br>
    <label for="riddle">Riddle:</label>
    <input type="text" id="riddle" name="riddle" required value="<?php echo $row['riddle']; ?>"><br>

    <label for="answer">Answer:</label>
    <input type="text" id="answer" name="answer" required value="<?php echo $row['answer']; ?>"><br>

    <label for="hint">Hint:</label>
    <input type="text" id="hint" name="hint" required value="<?php echo $row['hint']; ?>"><br>

    <label for="timelimit(seconds)">Time Limit (seconds):</label>
    <input type="number" id="timelimit(seconds)" name="timelimit(seconds)" required value="<?php echo $row['timelimit(seconds)']; ?>"><br>

    <input type="submit" name="btn_wzg" value="Wijzig">
  </form>
  <br><br>
  <a href='index.php'>Home</a>
</body>
</html>

<?php
    } else {
        echo "Geen id opgegeven<br>";
    }
?>