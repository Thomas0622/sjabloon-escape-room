<?php
    // functie: formulier en database insert riddle
    // auteur: Vul hier je naam in

    echo "<h1>Insert Riddle</h1>";

    require_once('functions.php');
	 
    // Test of er op de insert-knop is gedrukt 
    if(isset($_POST) && isset($_POST['btn_ins'])){

        // test of insert gelukt is
        if(insertRecord($_POST) == true){
            echo "<script>alert('Riddle is toegevoegd')</script>";
        } else {
            echo '<script>alert("Riddle is NIET toegevoegd")</script>';
        }
    }
?>
<html>
    <body>
        <form method="post">

        <label for="riddle">Riddle:</label>
        <input type="text" id="riddle" name="riddle" required><br>

        <label for="answer">Answer:</label>
        <input type="text" id="answer" name="answer" required><br>

        <label for="hint">Hint:</label>
        <input type="text" id="hint" name="hint" required><br>

        <label for="roomid">Room ID:</label>
        <input type="number" id="roomid" name="roomid" required><br>

        <label for="timelimit(seconds)">Time Limit (seconds):</label>
        <input type="number" id="timelimit(seconds)" name="timelimit(seconds)" required><br>

        <label for="team">Team:</label>
        <input type="text" id="team" name="team" required><br>

        <input type="submit" name="btn_ins" value="Insert">
        </form>
        
        <br><br>
        <a href='index.php'>Home</a>
    </body>
</html>
