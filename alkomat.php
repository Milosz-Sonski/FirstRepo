<!DOCTYPE HTML>
<html lang="pl">
<head>
<title>Alkomat</title>
</head>
<body>
<h1>Alkomat</h1>
<form action="index.php" method="POST">
	Podaj ilość trunku (w ml): <input type="number" name="ilosc_trunku"></input></br>
	Wybierz rodzaj trunku:
	<select name="alkohole" >
		<option value="piwo">Piwo</option>
		<option value="wino">Wino</option>
		<option value="wodka">Wódka</option>
	</select>
	</br>
	Zawartość wody w organizmie (dla konkretnej płci):
	<select name="plec" >
		<option value="mezczyzna">Mężczyzna</option>
		<option value="kobieta">Kobieta</option>
	</select></br>
	Podaj wagę (w kg): <input type="number" name="waga"></input></br>
	<input type="submit" name="przycisk" value="Oblicz">
</form>
<?php
if (isset($_POST['przycisk']))
{
	$ilosc_trunku_zmienna=$_POST['ilosc_trunku'];
	$ilosc_czystego_alkoholu;

	if($_POST['alkohole'] == "piwo")
	{
		$ilosc_czystego_alkoholu = $ilosc_trunku_zmienna/25;
	} else if ($_POST['alkohole'] == "wino"){
		$ilosc_czystego_alkoholu = $ilosc_trunku_zmienna/10;
	} else {
		$ilosc_czystego_alkoholu = $ilosc_trunku_zmienna/3;
	}

	if($_POST['plec'] == "kobieta")
	{
		$plec_zmienna = 0.6;
	} else {
		$plec_zmienna = 0.7;
	}
	$waga_zmienna=$_POST['waga'];
	
	$wynik = $ilosc_czystego_alkoholu/($plec_zmienna*$waga_zmienna);
	echo "<h2>".$wynik."‰"."<h2>";
}
?>
</body>
</html>
