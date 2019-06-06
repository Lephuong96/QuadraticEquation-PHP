<?php
include "QuadraticEquation.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QuadraticEquation</title>
    <style>
        .content {
            height: 250px;
            width: 250px;

        }
        form {
            width: 40%;
        }

        h2 {
            color: blue;
            margin-left: 20px;
        }
        fieldset {
            width: 300px;
            margin: 0 auto;

        }
        fieldset input {
            height: 30px;
            margin: 5px;
        }

        .display {
            width: 20%;
            height: 350px;
            padding: 10px;
            border: 1px #dd33dd solid;
            margin: 0 auto;
        }

        input[type=submit] {
            color: red;
            margin-left: 60px;
        }
        .result {
            margin: 7px;
            color: red;
        }
    </style>
</head>
<body>
<div class="display">
    <div class="content">
        <form method="post">
            <h2>Quadratic</h2>
            <fieldset>
                Coefficient a:<br>
                <input type="number" name="coefficientA">
                <br>Coefficient b:<br>
                <input type="number" name="coefficientB">
                <br>Coefficient c:<br>
                <input type="number" name="coefficientC">
                <br>Display:
                <input type="submit" value="Enter">
            </fieldset>
        </form>
        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $coefficientA = $_POST["coefficientA"];
                $coefficientB = $_POST["coefficientB"];
                $coefficientC = $_POST["coefficientC"];
                $quadraticEquation = new QuadraticEquation($coefficientA, $coefficientB, $coefficientC);
                if (!empty($coefficientA) || !empty($coefficientB) || !empty($coefficientC)) {
                    if ($quadraticEquation->getDiscriminant() === 0) {
                        echo "The equation has one roots " . $quadraticEquation->getDoubleExperience();
                    }
                    else if ($quadraticEquation->getDiscriminant() > 0) {
                        echo "The equation has two roots" . $quadraticEquation->getRoot1()."and" . $quadraticEquation->getRoot2();
                    } else{
                        echo "The equation has no roots";
                    }
                } else {
                    echo "*Please input numbers*";
                }
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>