<?php include 'stocks_pre.php' ?>
<?php include 'header.php' ?>
<div class="container" style="border-color: <?php if ($S1SUM < $S2SUM) {echo 'green';} else {echo 'red';} ?>;">
<img src="<?php echo explode('%3A', $S1, 2)[0]; ?>.svg">
<span class="title"><?php echo explode('%3A', $S1, 2)[0]; ?></span>
<span class="position"><?php echo $P1 ?> <?php echo explode('%3A', $S1, 2)[0]; ?> &#8226; $<?php echo $S1PRICE ?></span>
<span class="price">$<?php echo $S1SUM ?></span>
<span class="action" style="color: <?php if ($S1SUM < $S2SUM) {echo 'green';} else {echo 'red';} ?>;"><?php if ($S1SUM < $S2SUM) {echo 'BUY';} else {echo 'SELL';} ?></span>
</div>
<div class="container" style="border-color: <?php if ($S1SUM > $S2SUM) {echo 'green';} else {echo 'red';} ?>;">
<img src="<?php echo explode('%3A', $S2, 2)[0]; ?>.svg">
<span class="title"><?php echo explode('%3A', $S2, 2)[0]; ?></span>
<span class="position"><?php echo $P2 ?> <?php echo explode('%3A', $S2, 2)[0]; ?> &#8226; $<?php echo $S2PRICE ?></span>
<span class="price">$<?php echo $S2SUM ?></span>
<span class="action" style="color: <?php if ($S1SUM > $S2SUM) {echo 'green';} else {echo 'red';} ?>;"><?php if ($S1SUM > $S2SUM) {echo 'BUY';} else {echo 'SELL';} ?></span>
</div>
<form>
<div class="container" style="border-color: white;">
<img src="usd.svg">
<span class="title shared"><input type="text" onKeyUp="this.value = this.value.toUpperCase();" name="s1" value="<?php echo explode('%3A', $S1, 2)[0]; ?>" required> - <input type="text" onKeyUp="this.value = this.value.toUpperCase();" name="s2" value="<?php echo explode('%3A', $S2, 2)[0]; ?>" required></span>
<span class="price shared">$<?php echo $CASH ?></span>
</div>
<div class="container" style="border-color: white;">
<img src="pos.svg">
<span class="title shared"><input type="text" name="p1" value="<?php echo $P1 ?>" required> - <input type="text" name="p2" value="<?php echo $P2 ?>" required></span>
<span class="price shared">Position</span>
</div>
<input class="button" type="submit" value="Refresh">
</form>
</body>
</html>