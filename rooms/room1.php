<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

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

<p>You enter the closed Barbeque Store, as you try to look around it becomes very clear very quickly that you can't see anything in the darkness.</p>
<p></p>
<img src="img/images.jpg" alt="test" name="barbeque"><br>

<button onclick="revealContent()">Reveal</button>

<div id="hiddenContent" style="display:none; margin-top:20px;">
   

<script>
function revealContent() {
    document.getElementById("hiddenContent").style.display = "block";
}
</script>

    <h2>Answer these questions</h2>

    <p>Whats the furthest planet from the sun?</p>
<input type="password" id="code1" placeholder="Enter"><br><br>
<p>whats the name of George Orwell's dystopian novel about mass survaillance?</p>
<input type="password" id="code2" placeholder="Enter"><br><br>
<p>Finish the title: "Dirty Deeds...</p>
<input type="password" id="code3" placeholder="Enter"><br><br>

<button onclick="checkCodes()">Submit</button> </div>

<div id="linkArea" style="display:none; margin-top:20px;">
    <a href="room2.php" target="_blank">
        Continue
    </a>
</div>
         <script>
        // Change the input type to text so it always shows characters
        document.getElementById("password").type = "text";
    </script>
        
        <script>
function checkCodes() {
    const correctCodes = {
        code1: "Neptune",
        code2: "1984",
        code3: "Dirty Deeds Done Dirt Cheap"
    };

    const c1 = document.getElementById("code1").value;
    const c2 = document.getElementById("code2").value;
    const c3 = document.getElementById("code3").value;

    if (
        c1 === correctCodes.code1 &&
        c2 === correctCodes.code2 &&
        c3 === correctCodes.code3
    ) {
        document.getElementById("linkArea").style.display = "block";
    } else {
        alert("One or more codes are incorrect.");
    }
}
</script>

<script>
        // Change the input type to text so it always shows characters
        document.getElementById("code1").type = "text";
        document.getElementById("code2").type = "text";
        document.getElementById("code3").type = "text";
    </script>




    
</body>
</html>