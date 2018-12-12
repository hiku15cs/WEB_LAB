	<!DOCTYPE html>
<html>
	<head>
		<title>Matrix Transpose </title>
		<style>
			input{
				position:fixed;
				left:300px;
			}
			
			p{
				margin-top:30px;
				font-size:20px;
				font-style:bold;
			}
		</style>
	</head>
	<body>
			<h1>Matrix operations:</h1>
	
<?php
	$a=array(array(1,2,3),array(4,5,6),array(7,8,9));
	$b=array(array(1,0,0),array(0,1,0),array(0,0,1));
	$row= count($a);
	$col= count($a[0]);
	echo "<p> Original matrices:<p>";
	echo "A &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp B<br>";
	for($i=0;$i<$row;$i++)
	{
		for($j=0;$j<$col;$j++)
		{
			echo "".$a[$i][$j]." ";
		}
		echo "&nbsp &nbsp &nbsp";
		for($j=0;$j<$col;$j++)
		{
			echo "".$b[$i][$j]." ";
		}
		echo "<br>";
	}
	
	echo "<p> Transpose matrix:<p>";
	echo "At<br>";
	for($i=0;$i<$row;$i++)
	{
		for($j=0;$j<$col;$j++)
		{
			echo "".$a[$j][$i]." ";
		}
		echo "<br>";
	}
	
	echo "<p>Addition:<p>";
	echo "A + B<br>";
	for($i=0;$i<$row;$i++)
	{
		for($j=0;$j<$col;$j++)
		{
			echo "".($a[$i][$j] + $b[$i][$j]) ." ";
		}
		echo "<br>";
	}
	
	echo "<p>Matrix multiplication:<p>";
	echo "A * B<br>";

	if($row==$col)
	{
		for($i=0;$i<$row;$i++)
		{
			for($j=0;$j<$col;$j++)
			{
				$sum=0;
				for($k=0;$k<$row;$k++)
				{
					$sum+= ($a[$i][$k]*$b[$j][$k]);
				}

				echo "".$sum." ";
			}
			echo "<br>";
		}
	}
?>	
	</body>
</html>

<!-- -->
