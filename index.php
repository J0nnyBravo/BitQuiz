<?php
    require './Model/Question/QuestionText.php';



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

    $q1 = new QuestionText("Magst du PHP?", "Ja es geht so bin noch am lernen!");
    $q1 -> displayQuestion();
    //$q1 -> displayAnswer();







?>

<form action="index.php" method="post">
    <p>Frage:</p>
    <?php $q1 -> displayQuestion()?>
    <p style="color: green">Antwort:</p>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnClicked']))
        {
            $q1->displayAnswer();
        }
    ?>
    <br>
    <button name="btnClicked" >Lösung</button>
</form>

</body>
</html>
