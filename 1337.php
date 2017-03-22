<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>1337 Language Translator By An0n 3xPloiTeR</title>
		<meta name="about" content="For Obfuscating Php Code Given" />
        <meta name="author" content="An0n 3xPloiTeR, Umar Arfeen Shah" />
        <meta name="description" content="For Obfuscating the Php Code given" />
        <meta name="keywords" content="Obfuscator, index.php, Tool" />
        <meta http-equiv="refresh" content=""><!-- For Refreshing The Page After ____ intervals of time -->
		<meta name="revisit-after" content="1 days" />
		<meta name="language" content="en" />
		<meta content='general' name='rating' />
		<meta content='google' name='generator' />
		<meta content='follow,all' name='msnbot' />
		<meta content='follow,all' name='alexabot' />
		<meta content='pakistan' name='geo.placename' />
		<meta content="index,follow,all" name="googlebot" />
		<meta http-equiv="X-UA-Compatible" content="IE-edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name='search engines' content='Aeiwi,Alexa,AllTheWeb,AltaVista,AOLNetfind,Anzwers,Canada,DirectHit,EuroSeek,Excite,Overture,Go,Google,HotBot InfoMak,Kanoodle,Lycos,MachineSite,National Directory,Northern Light,SearchIt,SimpleSearch,WebsMostLinked,WebTop,What-U-Seek,AOL,Yahoo,WebCrawler,Infoseek,Excite,Magellan,LookSmart,bing,CNET,Googlebot' />
		<style>
			body {
				background-color: #080510;
			}
            a {
                color: red;
                text-decoration: none;
            }
            a:hover {
                color: teal;
            }textarea {
				color: white;
				font-size: 100%;
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: #080510; 
			}
			input {
				color: white;
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: #080510; 
			}
            .heading {
                text-align: center;
                font: 300% impact;
                margin-top: 1vh;
                color: white;
            }
            .footer {
                text-align: center;
                font: 25px impact;
                color: white;
                position: fixed;
                bottom: 0vh;
                left: 0vh;
                right: 0vh;
            }
		</style>
	</head>
	<body>
		<div class="heading">
			<font>1337 Language Translator By 
			<span style="color: red;">An0n 3xPloiTeR</span></font><br>
		</div>
		<div class="conversion"><center>
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
					echo "<br><textarea rows=\"10\" cols=\"90\">".$result_17."</textarea>";
				}
			?>
			</center>
		</div>
	</body>
</html>
