<?php require 'header.php'; ?>
<form>
<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"mano4");
$query = "SELECT orders.id as id,
 orders.customer_email as customer_email,
 products.title as title, 
 products.price as price FROM orders
 LEFT JOIN products ON orders.product_id = products.id";
    $result = mysqli_query($link, $query);	
?>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
 <div style="margin:0 auto; text-align:center; width:80%">
<h3>ORDERS</h3>
<table id="stdcode" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
<thead>
<tr >
 <th>ID</th>
 <th>CUSTOMER</th> 
 <th>PRODUCT</th>
 <th>PRICE</th>	
</tr>
</thead>
<tbody>
<?php foreach($result as $resultSet) { ?>
<tr>
  <th><?= $resultSet['id'] ?></th>
  <th><?= $resultSet['customer_email'] ?></th>
  <th><?= $resultSet['title'] ?></th>
  <th><?= $resultSet['price'] ?></th>	
</tr>
<?php } ?>
</tbody>
</table>
 <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script>
 
 <script>
 $(function(){
   $('#stdcode').DataTable();
 });
 </script>
</form>

<?php require 'footer.php'; ?>