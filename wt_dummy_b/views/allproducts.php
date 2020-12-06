<?php 
	include 'admin_header.php';
	require_once '../controllers/productContoller.php';
	$allProduct=getAllProduct();

?>
<!--All Products starts -->

<div class="center">
	<h3 class="text">All Products</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Category </th>
			<th> Price</th>
			<th> Quantity</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php 
				foreach($allProduct as $p)
				{
					$pid=$p["id"];
					echo "<tr>";
						echo "<td>".$p["id"]."</td>";
						echo "<td>".$p["name"]."</td>";
						echo "<td>".$p["cname"]."</td>";
						echo "<td>".$p["price"]."</td>";
						echo "<td>".$p["quantity"]."</td>";
						echo "<td> <a href='editproduct.php?id=$pid' class='btn btn-success'>Edit</a></td>";
						echo '<td> <a href="" class="btn btn-success">Delete</a></td>';
					echo "</tr>";
				}
			?>
			
		</tbody>
	</table>
</div>
<!--Products ends -->
<?php include 'admin_footer.php';?>