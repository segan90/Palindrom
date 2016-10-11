
<?php

if ($_POST['value'] === 'palindrom') {
	echo $_POST['value'] . ' is' . ' right ' . 'word. '  . 'CONGRATS!';
}
else {
	echo $_POST['value'] . ' is' . ' false ' . 'word. '  . 'SORRY!';	
}

?>
