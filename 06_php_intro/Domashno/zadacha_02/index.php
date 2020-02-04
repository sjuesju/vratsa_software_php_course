<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>PHP Math Tasks</title>	
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<table>
			<tr>
				<th>
					Input
				</th>
				<th>
					Output
				</th>
			</tr>
			<tr>
				<td>
					<?php	
						$a = 10;
						$b = 20;
						$s = $a*$b;
						echo "Rectangle, a = $a, b = $b";
					?>
				
				</td>
				<td class="answer">
					<?php
						echo "S = $s";
					?>
				</td>
			</tr>
			<tr>
				<td>
					<?php	
						$a = 5;
						$b = 40;
						$s = $a*$b;
						echo "Rectangle, a = $a, b = $b";
					?>
				
				</td>
				<td class="answer">
					<?php
						echo "S = $s";
					?>
				</td>
			</tr>
			<tr>
				<td>
					<?php	
						$a = 15;
						$b = 30;
						$s = $a*$b;
						echo "Rectangle, a = $a, b = $b";
					?>
				
				</td>
				<td class="answer">
					<?php
						echo "S = $s";
					?>
				</td>
			</tr>
			<tr>
				<td>
					<?php	
						$a = 15;
						$s = $a * $a;
						echo "Square, a = $a";
					?>				
				</td>
				<td class="answer">
					<?php
						echo "S = $s";
					?>
				</td>
			</tr>
			<tr>
				<td>
					<?php	
						$a = 32;
						$s = $a * $a;
						echo "Square, a = $a";
					?>				
				</td>
				<td class="answer">
					<?php
						echo "S = $s";
					?>
				</td>
			</tr>
			<tr>
				<td>
					<?php	
						$a = 100;
						$s = $a * $a;
						echo "Square, a = $a";
					?>				
				</td>
				<td class="answer">
					<?php
						echo "S = $s";
					?>
				</td>
			</tr>
			<tr>
				<td>
					<?php	
						$a = 10;
						$b = 15;
						$s = ($a * $b) / 2;
						echo "Triange, a = $a, b = $b";
					?>			
				</td>
				<td class="answer">
					<?php
						echo "S = $s";
					?>
				</td>
			</tr>
			<tr>
				<td>
					<?php	
						$a = 2;
						$b = 3;
						$s = ($a * $b) / 2;
						echo "Triange, a = $a, b = $b";
					?>			
				</td>
				<td class="answer">
					<?php
						echo "S = $s";
					?>
				</td>
			</tr>
			<tr>
				<td>
					<?php	
						$a = 19;
						$b = 44;
						$s = ($a * $b) / 2;
						echo "Triange, a = $a, b = $b";
					?>			
				</td>
				<td class="answer">
					<?php
						echo "S = $s";
					?>
				</td>
			</tr>
			<tr>
				<td>
					<?php	
						$a = 15;
						$s = pi() * $a * $a;
						echo "Circle, r = $a";
					?>			
				</td>
				<td class="answer">
					<?php
						echo "S = $s";
					?>
				</td>
			</tr>
			<tr>
				<td>
					<?php	
						$a = 44;
						$s = pi() * $a * $a;
						echo "Circle, r = $a";
					?>			
				</td>
				<td class="answer">
					<?php
						echo "S = $s";
					?>
				</td>
			</tr>
			<tr>
				<td>
					<?php	
						$a = 122;
						$s = pi() * $a * $a;
						echo "Circle, r = $a";
					?>			
				</td>
				<td class="answer">
					<?php
						echo "S = $s";
					?>
				</td>
			</tr>
		</table>		
	</body>
</html>