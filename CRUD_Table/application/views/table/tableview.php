<!DOCTYPE html>
<html>
<head>
<style>
  table,th,td{
    border:2px groove black;
    border-collapse: collapse;
    padding: 22px;
  }
  table{
    margin-top: 80px;
    margin-left: 20px;
    object-position: center;
  }
  .head{
    background-color: #f45353;
  }
  .h2{
    background-color:#d6d1d1;
    text-align: center;
  }
  .wo{
    color: blue;
  }
  .bo{
    padding: 8px;
    background-color: green;
    border:1px solid green;
    color:black;
    border-radius: 5px;
    cursor:pointer;
  }
  .bo:hover{
    opacity: 0.7;
  }
  .bo:active{
    border:1px solid black;
    color: blue;
    background-color: white;
  }
  .user{
    padding:15px;
    background-color: black;
    color: white;
    margin-left: 80%;
  }
  .btn:visited{
    color:#38BA15;
  }
  .btn{
    color:#38BA15;
    text-decoration: none;
  }
  .btn:active{
  color:blue;
  }
  .btn:hover{
    text-decoration: underline;
    font-weight: 550;
  }
</style>
  <title> table</title>
</head>
<body>
<p>To create a new data in the table <label for="create" class="wo">Press the below button to create a data</lable></p>
<a href="<?php echo base_url('insert'); ?>">
<button class=bo name="create" type="submit">CREATE</button>
</a>
  <table>
    <tr>
      <th class="head">ID</th>
      <th class="head">Name</th>
      <th class="head">Age</th>
      <th class="head">Product</th>
      <th class="head">Title</th>
      <th class="head">Image</th>
      <th class="head">Action</th>
      <th class="head">Show</th>
       </tr>
       
<?php
$i = 1;
 foreach ($consumer as $row): ?>
<tr>
<td class="h3"><?php echo $i;?></td>
<td class="h2"><?php echo $row['name']; ?></td>
<td class="h3"><?php echo $row['age'];?></td>
<td class="h2"><?php echo $row['product'];?></td>
<td class="h3"><?php echo $row['pictitle']; ?></td>
<td class="h3"><img class="btn2" src="<?=base_url().'uploads/'.$row['pic'];?>" width="100" ></td>
<td class="h2"><a class="btn2" href="<?php echo base_url('Tablecon/edit/' . $row['id']); ?>">EDIT</a>&nbsp; 
<a class="btn2" href="<?php echo base_url('Tablecon/delete/'.$row['id']); ?>">DELETE</a> </td>
<td class="h3"><a class="show" href="<?php echo base_url('Tablecon/show/' .$row['id']); ?>">SHOW</td>     
      </tr>
  <?php $i++;
endforeach; ?> 
</table>
</div>
</body>
</html> 