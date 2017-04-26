<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise.min.css">
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-utils/concise-utils.min.css">
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-ui/concise-ui.min.css">
		<style>
    input[type="text"]{
display:inline;
width:auto;
}
    </style>
	</head>
	<body container>
<?php 
    $table=$_GET["table"];
    $p = 1*$table;
    $d = 2*$table;
    $t = 3*$table;
    $q = 4*$table;
    $c = 5*$table;
    $s = 6*$table;
    $ss = 7*$table;
    $h = 8*$table;
    $n = 9*$table;
    $dd = 10*$table;
    
    echo "<li> 1 x $table = $p </li>";
     echo "<li> 2 x $table = $d </li>";
     echo "<li> 3 x $table = $t </li>";
     echo "<li> 4 x $table = $q </li>";
     echo "<li> 5 x $table = $c </li>";
     echo "<li> 6 x $table = $s </li>";
     echo "<li> 7 x $table = $ss </li>";
     echo "<li> 8 x $table = $h </li>";
     echo "<li> 9 x $table = $n </li>";
     echo "<li> 10 x $table = $dd </li>";
    ?>

		<form  method="GET">
			<input type=text name="table" placeholder="table">
			<button  class="btn" type="submit">ENVOYER</button>
		</form>
	</body>
</html>