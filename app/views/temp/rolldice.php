<!doctype html>
<html lang="en">
<head>
    <title>Roll Dice</title>
</head>
<body>
    <h1>Roll the Dice!</h1>
<h2>Pick a random number between 1 and 6</h2>

<h3>The number you guessed is <?php echo $guess;?></h3>

<h3>The random number is <?php echo $randnum;?></h3>

<?php if($guess != $randnum) :?>
	<p style ="color:green;">"WRONG!!! Try again!";</p>
<?endif; ?>
<?php if($guess == $randnum) :?>
	<h3 style="color:red;">"Winner Winner Chicken Dinner!"</h3>
<?endif; ?>

</body>
</html>