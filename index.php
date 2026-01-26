<?php include 'header.php' ?>
<form method="POST">
<div class="container" style="border-color: white;">
<img src="usd.svg">
<span class="title shared"><input type="text" onKeyUp="this.value = this.value.toUpperCase();" name="s1" value="GOOGL" required> - <input type="text" onKeyUp="this.value = this.value.toUpperCase();" name="s2" value="MA" required></span>
<span class="price shared">Stocks<input style="display: none;" type="text" name="redirect" value='window.open("stocks.php'></span>
</div>
<div class="container" style="border-color: white;">
<img src="pos.svg">
<span class="title shared"><input type="text" name="p1" value="10" required> - <input type="text" name="p2" value="3" required></span>
<span class="price shared">Position</span>
</div>
<input class="button" type="submit" value="Start">
</form>
</body>
</html>