<?php
$title = "Quiz";
?>

<?php include "includes/header.php"; ?>
<style>
<?php include "css/style3.css"; ?>
</style>

<header><img src="img/logo.png" alt="HTML tutorial" style="width:75px;height:75px;"> Quiz </header>

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

<div class="quiz">

    <form action="quizresultaat.php" method="post" id="quiz">

            <h3>Welke eten is ongezond?</h3>

            <div>

            <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />

            <label for="question-1-answers-A">A) Appel </label>

            </div>

            <div>

            <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />

            <label for="question-1-answers-B">B) Pizza</label>

            </div>

            <div>

            <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />

            <label for="question-1-answers-C">C) Broccoli</label>

            </div>

            <div>

            <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />

            <label for="question-1-answers-D">D) Spinazie</label>

            </div>

            <h3>Welke maaltijd is het gezondste van de dag?</h3>

            <div>

            <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />

            <label for="question-2-answers-A">A) Ontbijt </label>

            </div>

            <div>

            <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />

            <label for="question-2-answers-B">B) Lunch</label>

            </div>

            <div>

            <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />

            <label for="question-2-answers-C">C) Diner</label>

            </div>

            <div>

            <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />

            <label for="question-2-answers-D">D) Tussendoortjes</label>

            </div>

            <h3>Waarom is bewegen goed voor je?</h3>

            <div>

            <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />

            <label for="question-3-answers-A">A) Bewegen is goed voor je hart. </label>

            </div>

            <div>

            <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />

            <label for="question-3-answers-B">B) Bewegen kan stress, angst en depressie verminderen.</label>

            </div>

            <div>

            <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />

            <label for="question-3-answers-C">C) Bewegen voorkomt overgewicht.</label>

            </div>

            <div>

            <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />

            <label for="question-3-answers-D">D) Alles wat hier boven staat.</label>

            </div>

            <h3>Welke activiteit is gezond?</h3>

            <div>

            <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />

            <label for="question-4-answers-A">A) Gamen </label>

            </div>

            <div>

            <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />

            <label for="question-4-answers-B">B) TV kijken</label>

            </div>

            <div>

            <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />

            <label for="question-4-answers-C">C) Sporten</label>

            </div>

            <div>

            <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />

            <label for="question-4-answers-D">D) Huiswerk maken</label>

            </div>

            </br>

            <input type="submit" value="Quiz inleveren" />

    </form>

    


</div>

</body>

<?php include "includes/footer.php"; ?>