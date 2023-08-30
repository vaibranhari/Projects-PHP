<!DOCTYPE html>
<html>
<head>
  <title>consumer details</title>
</head>
<body>
<h4>Consumer details</h4>
<P> Id: <?= $consumer['id']; ?></P>
<P> Name: <?= $consumer['name']; ?></P>
<P> Age: <?= $consumer['age']; ?></P>
<P> Product: <?= $consumer['product']; ?></P>
<div class="b2">
<a href="<?php echo base_url('Table');?>">
<button class="but2" >Back</button></a>
</div>

</body>
</html>
