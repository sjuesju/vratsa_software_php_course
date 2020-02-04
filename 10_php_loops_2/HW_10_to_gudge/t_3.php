<?php
echo"<table cellpadding= '5' border = '1'>" ;

for ($i=1; $i <=10 ; $i++) { 
	echo "<tr>";
	for ($c=1; $c <=$i; $c++) { 
		$num = $i*$c;
		echo "<td>". $i . "*" . $c . " = ". $num ."</td>";
		# code...
		}
		# code...
	}

	"</tr>";
	# code...
