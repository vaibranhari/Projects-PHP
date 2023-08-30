<!DOCTYPE html>
<html>
<head>
<title>Edit</title>
<style>

.con{
margin-left:30%; 
width:25%;
padding-left:80px; 
padding-right:80px;
border:5px groove #EFEDEC;
border-radius: 60px;
top: 10%;
left: 30%;
} 
.text{
text-align: center;
font-size: 19px;
font-weight: bolder;
color: #52514F
/* box-shadow:1px 2px 0.2px #CFCCC8;*/
}
.name{
width: 90px;
border:2px inset #EFEDEC ;
text-align: center;
width: 70%;
padding-top: 3%;
padding-bottom: 3%;
border-radius: 60px;
box-shadow: 4px 5px 55px 18px #DCDBDA inset;
margin-bottom: 30px;
}
.pos{
width: 90px;
text-align: center;
border:2px inset #EFEDEC ;
width: 70%;
padding-top: 3%;
padding-bottom: 3%;
border-radius: 60px;
box-shadow: 4px 5px 25px 50px #DCDBDA inset;
margin-bottom: 30px;
}
.value{
text-align: center;
width: 90px;
border:2px inset #EFEDEC ;
width: 70%;
padding-top: 3%;
padding-bottom: 3%;
border-radius: 60px;
box-shadow: 10px 5px 25px 50px #DCDBDA inset;
margin-bottom: 30px;
}
.age{
text-align: center;
width: 90px;
border:2px inset #EFEDEC;
width: 70%;
padding-top: 3%;
padding-bottom: 3%;
border-radius: 60px;
box-shadow: 10px 5px 25px 50px #DCDBDA inset;
margin-bottom: 30px;
}

.but{
cursor: pointer;
text-align: center;
width: 50%;
padding-top: 3.5px;
padding-bottom: 3.5px;
border-radius: 60px;
border:2px inset #EFEDEC;
padding-top: 8px;
padding-bottom: 8px;
color: red;
font-weight: bolder;
margin-bottom: 0;

}   
.but:active{
border: 2px outset #EFEDEC;
}
.b{
text-align: center;
}

.but2{
cursor: pointer;
padding: 3px;
padding-left: 6px;
padding-right: 6px;
margin-top: 5px;
border-radius: 7px;
font-weight: solid;
background-color: #E65A57;
border:1.5px groove hsla(0, 0%, 0%, 0.50);
}
.but2:active{
background-color: red;
border:0;
}
.b2{
text-align: right;
margin-right: 40px;
margin-bottom: 20px;
}
.in{
text-align: center;
}
</style>
</head>
<body style="background-color:#DCDBDA;">
<div class="con">
<h2 class="text">Edit</h2>
<form action="<?= base_url('Tablecon/edit/' . $consumer['id']); ?>" method="post" >
<!-- Name -->
<label for="name">Name:</label>
<div class="in">
<input class="name" type="text" autocomplete="off"  name="name" value="<?= $consumer['name']; ?>" required>
</div>
<br>
<!-- Age -->
<label for="age">Age:</label>
<div class="in">
<input class="pos" type="text" autocomplete="off" name="age" value="<?= $consumer['age']; ?>" required>
</div>
<br>
<!-- Product -->
<label for="product">Product:</label>
<div class="in">
<input class="value" type="text" autocomplete="off" id="product" name="product" value="<?= $consumer['product']; ?>" required >
</div>
<br>
<!-- submit_button -->
<div class="b">
<input class="but" type="submit" value="Update">
</div>
<!-- cancel_button -->
<div class="b2">
<a href="<?php echo base_url('Table');?>">
<button class="but2" >cancel</button></a>
</div>

</form>
</div>
</body>
</html>

