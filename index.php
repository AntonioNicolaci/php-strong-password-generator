<?php
include __DIR__ . "/functions.php";
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <?php 
    if ($lPass != '') {?>
        <h1>La password generata è <?php passCreator($arrSign, $lPass, $repeat, $opt);
    } else { ?>
    
    <form action="" method="get">
		<label for="lPass">
			Inserisci la lunghezza della password:
		</label>
        <input type="number" id="lPass" name="lPass">
        <h3>Ripetere i caratteri?</h3>
				<div>
					<input type="radio" name="rep" id="radio-si" value='1'>
					<label for="radio-si">
						Si, ripeti.
					</label>
				</div>
				<div>
					<input type="radio" name="rep" id="radio-no" value='0'>
					<label for="radio-no">
						No, non ripetere.
					</label>
				</div>


				<h3>Seleziona caratteri:</h3>
				<div>
					<input type="checkbox" id="lettere" name="opt[]" value='0'>
					<label for="lettere">
						Lettere.
					</label>
				</div>
				<div>
					<input type="checkbox" id="numeri" name="opt[]" value='1'>
					<label for="numeri">
						Numeri.
					</label>
				</div>
				<div>
					<input type="checkbox" id="simboli" name="opt[]" value='2'>
					<label for="simboli">
						Simboli.
					</label>
				</div>
        <button type="submit">invia</button>
        <button type="reset">reset</button>
    </form>
        
    <?php
    } ?>
</body>
</html>