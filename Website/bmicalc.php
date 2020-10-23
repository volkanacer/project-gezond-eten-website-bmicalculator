<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style3.css">
    <title>Uitslagen BMI</title>
</head>

<header><img src="img/logo.png" alt="HTML tutorial" style="width:75px;height:75px;"> De Uitslag!</header>

<body>

<div class="wrapper">
    <nav class="flex-nav">
      <ul>
        <li><a href="voorpagina.php">Home</a></li>
        <li><a href="bmiform.php">BMI Rekenmachine</a></li>
        <li><a href="recepten.php">Gezonde Recepten</a></li>
        <li><a href="bmiapplicatie.php">BMI Applicatie</a></li>
        <li><a href="quiz.php">Quiz</a></li>
        </li>
      </ul>
    </nav>
</div>

<div class="mijnDiv2">

<?php

$username = $_POST["username"];
$lengte = $_POST["lengte"];
$gewicht = $_POST["gewicht"];

$bmi = round($gewicht / ($lengte * $lengte),2);

echo "Berekend BMI van $username <br>"; 

echo "Lengte: $lengte m <br>";

echo "Gewicht: $gewicht kg <br>";

echo "BMI: $bmi <br>";



if ($bmi < 18.5) {
    $uitkomst = "Ondergewicht";
} 
elseif ($bmi >= 18.5 && $bmi < 25) {
    $uitkomst = "Goed gewicht";
} 
elseif ($bmi >= 25 && $bmi < 27) {
    $uitkomst = "Licht overgewicht";
} 
elseif ($bmi >= 27 && $bmi < 30) {
    $uitkomst = "Matig overgewicht";
}
elseif ($bmi >= 30 && $bmi < 40) {
    $uitkomst = "Ernstig overgewicht";
} 
elseif ($bmi > 40) {
    $uitkomst = "Gevaarlijk overgewicht";
} 

echo "Uitkomst: $uitkomst";

?>

    </div>
</body>

</br >

<div class="bmiimage">
<img src="img/bmi.png" alt="bmi chart">
</div>

<footer></footer>

</html>
