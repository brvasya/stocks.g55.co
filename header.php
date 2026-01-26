<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $_SERVER['HTTP_HOST'] ?></title>
<link rel="icon" href="usd.svg">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
<link rel="stylesheet" href="style.css">
<script>
<?php echo $_POST['redirect'] . '?s1=' . $_POST['s1'] . '&s2=' . $_POST['s2'] . '&p1=' . $_POST['p1'] . '&p2=' . $_POST['p2'] . '", "_top");
' ?>
</script>
<script>
function toggleMenu() {
	var menu = document.getElementById("menu");
	if (menu.style.display === "none") {menu.style.display = "block";} else {menu.style.display = "none";}
}
</script>
</head>
<body>
<div class="header">
<img class="menubt" onClick="toggleMenu()" src="menu.svg">
<h1><a href="/stocks/"><?php echo $_SERVER['HTTP_HOST'] ?></a></h1>
</div>
<div id="menu" style="display: none;">
<?php include 'menu.php' ?>
</div>
