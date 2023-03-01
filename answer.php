<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
</head>
<style>
	body {
		font: 18px Gorgia, serif;
	}
	.container {
    min-height: calc(100vh - 20vh);
    border-radius: 10px;
    overflow: hidden;
    background: linear-gradient(50deg, #F40076, #DF98FA);
    width: 500px;
    margin: auto;
    margin-top: 50px;
}
	.header {
		margin: 25px 0; font: 18px Georgia, Serif; text-transform: uppercase; letter-spacing: 3px; text-align: center; margin-top: 100px;
	}
	#results {
		font: 44px Georgia, Serif; text-align: center;
	}

</style>

<body>

	<div class="container">
		<div class="header">
		<h1>Congratulations!</h1>
		<?php 
		//retrieve session data
			echo "<div id='results'>{$_SESSION["playername"]}</div>";
		?>
		<p>You got a total Score of:</p>
	    </div>
<?php

$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$answer4 = $_POST['answer4'];
$answer5 = $_POST['answer5'];
$answer6 = $_POST['answer6'];
$answer7 = $_POST['answer7'];
$answer8 = $_POST['answer8'];
$answer9 = $_POST['answer9'];
$answer10 = $_POST['answer10'];

$total = 0;

if ($answer1 == "C") { $total++;}
if ($answer2 == "B") { $total++;}
if ($answer3 == "D") { $total++;}
if ($answer4 == "A") { $total++;}
if ($answer5 == "B") { $total++;}
if ($answer6 == "A") { $total++;}
if ($answer7 == "A") { $total++;}
if ($answer8 == "C") { $total++;}
if ($answer9 == "B") { $total++;}
if ($answer10 == "A") { $total++;}



echo "<div id='results'>$total / 10</div";

?>

	</div>
</body>
</html>