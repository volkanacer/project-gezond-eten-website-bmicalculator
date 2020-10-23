<?php
$title = "BMI Rekenmachine";
?>

<?php include "includes/header.php"; ?>
<style>
<?php include "css/style3.css"; ?>
</style>

<header><img src="img/logo.png" alt="HTML tutorial" style="width:75px;height:75px;"> De BMI Rekenmachine! </header>

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

    <div class="mijnDiv">

        <form action="bmicalc.php" method="post">

            <label for="username"> Voornaam</label>

            </br >

            <input type="text" name="username" id="">

            </br >

            <label for="lengte"> Lengte (m)</label>

            </br >

            <input type="text" name="lengte" id="">

            </br >

            <label for="gewicht"> Gewicht (kg)</label>

            </br >

            <input type="text" name="gewicht" id="">

            </br >

            <input type="submit" value="Berekenen">

        </form>

    </div>
</body>

<?php include "includes/footer.php"; ?>