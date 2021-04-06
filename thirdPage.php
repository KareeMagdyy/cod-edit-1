<!DOCTYPE html>
<html>
<head>
	<title>Enter Data</title>
	<link rel="stylesheet" type="text/css" href="thirdPageStyle.css">
</head>
<body>
	<main>
		<div class="mainDiv">
			<form action="final.php" method="post" class="dataForm">
				<label for="reporter">Reporter</label>
				<input type="text" list="list1" id="reporter" placeholder="Choose" name="reporter">
					<datalist id="list1">
						<option value="Tasneem">
						<option value="Saif">
					</datalist>

				<label for="winner">Winner</label>
				<input type="text" name="winner" list="list2" id="winner" placeholder="Choose">
					<datalist id="list2">
						<option value="Tasneem">
						<option value="Saif">
					</datalist>

				<label for="date">Date</label>
				<input type="Date" name="date" id="date" placeholder="Date">

				<label for="gamesWon">Games Won</label>
				<input type="text" name="gamesWon" placeholder="How Many" id="gamesWon">

				<label for="gamesLost">Games Lost</label>
				<input type="text" name="gamesLost" placeholder="How Many" id="gamesLost">

				<label for="mode">Mode</label>
				<input type="text" name="mode" list="list3" id="mode" placeholder="Choose">
					<datalist id="list3">
						<option value="Multiplayer">
						<option value="Battle Royale">
					</datalist>

				<label for="veto">VETO</label>
				<input type="text" name="veto" placeholder="How Many" id="veto">

				<input type="submit" name="submit" class="formInputs">
			</form>
		</div>
	</main>
</body>
</html>