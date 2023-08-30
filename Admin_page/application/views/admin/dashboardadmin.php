<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
<style>
.header{
text-align: center;
text-shadow: -3px 2px 10px black;
font-size: 50px;
color: #2d3250;
}
.username{
text-align: right;
margin-bottom: 0;
color: white;
margin-right: 293px;
font-variant: all-small-caps;
font-size: 26px;
}
.logout-button{
display: block;
text-align: right;
margin-top: 3px;
margin-right: 351px;
text-decoration: none;
color: aquamarine;
}
.search{
color: white;
margin-left:280px ;
font-size: 22px;
font-variant-caps: petite-caps;
}
.search-button{
background-color: transparent;
border: 1px solid #686d889d;
border-radius: 5px;
padding: 4px;
padding-right: 120px;
color: white;

}
.table-inner{
margin-left: auto;
margin-right: auto;
}
.head-t{
color: #d49526;
padding: 25px;
}
.ele{
color: whitesmoke;
text-align: center;
padding: 8px;
font-family: 'Playfair Display SC', serif;
}
.block{
text-decoration: none;
color: rgb(8, 255, 8);
font-weight: bolder;
font-family: none;  
}
.unblock{
  text-decoration: none;
  color:red;
  font-weight: bolder;
  font-family: none;
}

</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Playfair+Display+SC&display=swap');
</style>
</head>
<body style="background-color: #161e31;">
    <h1 class="header">ADMIN PAGE</h1>
    <p class="username">Username: <?php echo $this->session->userdata('username');?></p>
    <a class="logout-button" href="<?= base_url('Admin/logout') ?>">Logout</a>
    <p class="search" >Search <input type="text" id="searchInput" class="search-button"></p>
    <div class="table">
    <table id="myTable" class="table-inner">
        <thead>
            <tr>
            <th class="head-t">S.No</th>
            <th class="head-t">Consumer Id</th>
            <th class="head-t">Username</th>
            <th class="head-t">Created date</th>
            <th class="head-t">Active status</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $i=1;
        foreach ($consumers as $row): ?>
        <tr>
            <td class="ele"><?php echo $i;?></td>
            <td class="ele"><?php echo $row['consumer_id'];?></td>
            <td class="ele"><?php echo $row['username'];?></td>  
            <td class="ele"><?php echo $row['user_created'];?></td>
            <td class="ele">
            <?php if ($row['status'] === 'active'): ?>
                            <a href="<?php echo site_url('Admin/blockUser/' . $row['id']); ?>" class="block">Active</a>
                        <?php else: ?>
                            <a href="<?php echo site_url('Admin/unblockUser/' . $row['id']); ?>" class="unblock">Block</a>
                        <?php endif; ?>
          </td>
            
          </tr>

      
        <?php $i++; endforeach; ?> 
        </tbody>
    </table>

    </div>
    <script>
        $(document).ready(function() {
          $("#searchInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tbody tr").each(function() {
              var rowText = $(this).text().toLowerCase();
              if (rowText.indexOf(value) !== -1) {
                $(this).show();
              } else {
                $(this).hide();
              }
            });
          });
        });
        </script>
    </body>
</html>
