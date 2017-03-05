<center>
<h1>1337 Language Translator By An0n 3xPloiTeR</h1>
<form action="" method="POST">
	Text:<br>
	<textarea rows="10" cols="90" name="text"></textarea><br>
	<input type="submit" name="submit" value="Convert" />
</form>
<?php
	if (isset($_POST['submit'])) {
		$string = $_POST['text'];
		$result_1 = str_replace('a', '4', $string);
		$result_2 = str_replace('A', '4', $result_1);
		$result_3 = str_replace('I', '1', $result_2);
		$result_4 = str_replace('i', '1', $result_3);
		$result_5 = str_replace('o', '0', $result_4);
		$result_6 = str_replace('O', '0', $result_5);
		$result_7 = str_replace('s', '5', $result_6);
		$result_8 = str_replace('S', '5', $result_7);
		$result_9 = str_replace('e', '3', $result_8);
		$result_10 = str_replace('E', '3', $result_9);
		$result_11 = str_replace('S', '5', $result_10);
		$result_12 = str_replace('b', '8', $result_11);
		$result_13 = str_replace('B', '8', $result_12);
		$result_14 = str_replace('t', '7', $result_13);
		$result_15 = str_replace('T', '7', $result_14);
		$result_16 = str_replace('l', '1', $result_15);
		$result_17 = str_replace('L', '1', $result_16);
		echo $result_17;
	}
?>
</center>