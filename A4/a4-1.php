<?php
//adder.php
if (isset($_POST['num1']))
{
  	$num1 = $_POST['num1'];
  	$num2 = $_POST['num2'];
  	$myTotal = $num1 + $num2;
  	echo "<h2 align=center>You added <font color=blue>". $num1 ."</font> and ";
  	echo "<font color=blue>" . $num2 . "</font> and the answer is <font color=red>" . $myTotal ."</font>!";
  	echo '<br><a href="">Reset page</a>';
}else{
echo '
   	<html>
   	<body>
   	<h1 align="center">Adder.php</h1>
   	<form action="a4-1.php" method="post">
   	Enter the first number:<input type="text" name="num1"><br>
   	Enter the second number:<input type="text" name="num2"><br>
   	<input type="submit" value="Add Em!!">
   	</form>
   	</body>
   	</html>
';
}
/*
1. Line nine missing a .
2. Line ten missing a ;
3. Line twenty four curly brace backwards
4. Line 16 closing unnecessary close tag
5. Line 19 needed double quote
6. Line 16 needed method
7. Line 16 needed form action
8. Line 17 num1 was capitalized
9. Line 7 num2 was capitalized
10.Line 7 had unnecessary -
*/
?>