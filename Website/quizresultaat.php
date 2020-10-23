<?php
$title = "Quiz Resultaat";
?>

<?php include "includes/header.php"; ?>
<style>
<?php include "css/style3.css"; ?>
</style>

<header><img src="img/logo.png" alt="HTML tutorial" style="width:75px;height:75px;"> Quiz Resultaat </header>

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

<?php

$answer1 = $_POST['question-1-answers'];

$answer2 = $_POST['question-2-answers'];

$answer3 = $_POST['question-3-answers'];

$answer4 = $_POST['question-4-answers'];




$totalCorrect = 0;

if ($answer1 == "B") { $totalCorrect++; }

if ($answer2 == "A") { $totalCorrect++; }

if ($answer3 == "D") { $totalCorrect++; }

if ($answer4 == "C") { $totalCorrect++; }


echo "<div id='results'>$totalCorrect / 4 correct</div>";

?>

</body>

<?php include "includes/footer.php"; ?>