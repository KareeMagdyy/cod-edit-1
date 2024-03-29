<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Enter Data</title>
	<link rel="stylesheet" type="text/css" href="thirdPageStyle.css">
</head>
<body>
	<div class="bg"></div>
	<main>
		<div class="container">
			<form action="final.php" method="post" class="data-form">
				<label for="reporter">Reporter</label>
				<select type="text" list="list1" id="reporter" placeholder="Choose" name="reporter" required>
						<option value="Tasneem">Tasneem</option>
						<option value="Saif">Saif</option>
				</select>			
				<label for="winner">Winner</label>
				<select type="text" name="winner" list="list2" id="winner" placeholder="Choose" required>
						<option value="Tasneem">Tasneem</option>
						<option value="Saif">Saif</option>
				</select>
				<label for="date">Date</label>
				<input type="Date" name="date" id="date" placeholder="Date" required>

				<label for="gamesWon">Games Won</label>
				<input type="number" name="gamesWon" placeholder="How Many" id="gamesWon" required>

				<label for="gamesLost">Games Lost</label>
				<input type="number" name="gamesLost" placeholder="How Many" id="gamesLost" required>

				<label for="mode">Mode</label>
				<select type="text" name="mode" list="list3" id="mode" placeholder="Choose" required>
						<option value="Multiplayer">Multiplayer</option>
						<option value="Battle Royale">Battle Royale</option>
				</select>
				<label for="veto">VETO</label>
				<input type="number" name="veto" placeholder="How Many" id="veto" required>
				<button type="submit" name="submit" class="formInputs">Fire</button>
			</form>
		</div>
	</main>
</body>
</html>