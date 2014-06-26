

<!doctype html>
<html lang="en">
<head>
    <title>Roll Dice</title>
</head>
<body>
	<h1>Guess: <?= $guess; ?></h1>
    <h1>Random Number: <?= $rand; ?></h1>
    <? if ($rand == $guess) : ?>
    <h1>Your guess matches the random number!<h1>
    <? endif; ?>
</body>
</html>