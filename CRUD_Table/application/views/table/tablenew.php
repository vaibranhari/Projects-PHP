<!DOCTYPE html>
<html>
<head>
	<title>new data</title>
	<style>

   .con{
   /* display: inline-flex;*/
    width: 30%;
    border:5px groove #EFEDEC;
    border-radius: 60px;
    position: absolute;
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
    text-decoration: none;
  }
  .but2:active{
    background-color: red;
    border:0;
    color: black;
  }
  .but2:visited{
    color: red;
  }
  .b2{
    text-align: right;
    margin-right: 40px;
    margin-bottom: 20px;
  }
  .in{
    text-align: center;
  }
.custom-file-input {
  color: transparent;
}
.custom-file-input::-webkit-file-upload-button {
  visibility: hidden;
}
.custom-file-input::before {
  content: 'Load the Picture';
  color: black;
/*  display: inline-block;*/
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

.custom-file-input:active {
 border: 2px outset #EFEDEC;
}
	</style>
</head>
<div style="color:red">
<?php echo validation_errors(); ?>
<?php if(isset($error)){print $error;}?>
</div>
<div class="con">
<?php echo form_open_multipart('Tablecon/input');?>
<form method="POST" action="">
<body style="background-color:#DCDBDA;">
<p class="text">Enter the details in the below table</p><br>
<!-- name -->
<div class="in">
<input type="text" name="name" class="name" placeholder="Name" required>
</div>
<!-- age -->
<div class="in">
<input type="text" name="age" class="pos" placeholder="Age" required>
</div>
<!-- product -->
<div class="in">
<input type="text" name="product" class="value" placeholder="Product" required>
</div>
<!-- Pic-title -->
<div class="in">
<input type="text" class="age" placeholder="Picture Title" name="title" value="<?= set_value('title'); ?>" id="title" required>
</div>
<!-- file_upload -->
<div class="b">
<input type="file" name="pic_file" id="pic_file"  required><br><br>
</div>
<!-- submit -->
<div class="b">
<input class="but" type="submit" name="submit" >
</div>
<!-- cancel -->
<div class="b2">
<a href="<?=base_url().'Table'?>" class="but2">x</a>
</div>
</div>
</form>
</body>
</html>

