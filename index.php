<?php require 'header.php'; ?>
<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"mano4");   
?>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
 <div style="margin:0 auto; text-align:center; width:80%">
  <body>
  	<div class="container"> 
  	
  <form class="form-horizontal" method="post" action="insert.php">
   
    <div class="form-group">
      <label  class="col-sm-2 control-label">Customer email</label>
      <div class="col-sm-6">
      <input type="text" name="email" placeholder="Your Email Here">
	</div>

    </div>

    <div class="form-group">
       <label class="col-sm-2 control-label">Select product:</label>
       <div class="col-sm-6">
        <select>
  <?php
	  $res=mysqli_query($link,"select * from products");
	  
	  while($row=mysqli_fetch_array($res))
	  {
		?>
		
	  <option><?php echo $row["title"];?> - <?php echo $row["price"];?> € </option>  
	  <?php
	  }
  ?>	  
  
  </select>	
    </div>
	  </div>
	  <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="Submit" name="submit">
            </div>
        </div>
  </form>
</div>
  </body>
<?php require 'footer.php'; ?>