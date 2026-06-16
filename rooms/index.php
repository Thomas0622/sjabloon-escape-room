<?php
$geheimeCode = "1987";
$bericht = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ingevoerdeCode = $_POST["code"] ?? "";

    if ($ingevoerdeCode === $geheimeCode) {
        $bericht = "The door opens slowly, a low hanging fog escapes from the store";
    } else {
        $bericht = "Nuh uh!";
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Horror Escape Room</title>
    <style>
        body {
            background: #000;
            color: #b30000;
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 100px;
        }

        input, button {
            padding: 10px;
            font-size: 18px;
        }

        h1 {
            text-shadow: 0 0 10px red;
        }
    </style>
</head>
<body>

<img src="img/Outside store.jpeg" alt="outsidestore" name="outside">

    <h1>John's Killer Barbeque Store! <br>Your trusty Barbeque Buddy since 1987!
        
    </h1>

    



    <h2>Enter the correct debut year before you may enter</h2>

    <input type="password" id="codeInput" placeholder="Enter code">
    <button onclick="checkCode()">Submit</button>

    <div id="linkArea" style="display:none; margin-top:20px;">
        <a href="room1.php" target="_blank">
            The door slowly opens as a low hanging fog creeps out
        </a>
    </div>

    <script>
        function checkCode() {
            const correctCode = "1987";
            const userCode = document.getElementById("codeInput").value;

            if (userCode === correctCode) {
                document.getElementById("linkArea").style.display = "block";
            } else {
                alert("Incorrect code");
            }
        }
    </script>

    <script>document.getElementById("codeInput").type = "text";</script>

</body>
</html>

</body>
</html>