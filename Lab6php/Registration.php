<?php 
	session_start();
	if($_SESSION["username"]=="" && $_SESSION["password"]=="")
	{
		header("Location: login.php");
	}

?>
<html>
	<head></head>
	<body>
		<table border="1">
			<tr>
				<td> <a href="addbook.php">add book</a> </td>
			</tr>
			<tr>
				<td>sr.no</td>
				<td>name</td>
				<td>publisher</td>
				<td>isbn</td>
				<td>price</td>
				<td>delete</td>
			</tr>
			<?php 
				$books = simplexml_load_file("book.xml");
			
				$data = $books->book;
				$name="";
				$pub="";
				$isbn="";
				$price="";
				$number="";
				$delete="";
				//echo $data[1]->username;
				$i=0;
				for( ;$i<count($data);$i++)
				{
					$name=$data[$i]->name;
					$pub=$data[$i]->publisher;
					$isbn=$data[$i]->isbn;
					$price=$data[$i]->price;
					$number=$data[$i]->number;
					$delete=$data[$i]->del;
		
					echo "<tr>
					<td>$number</td>
					<td>$name</td>
					<td>$pub</td>
					<td>$isbn</td>
					<td>$price</td>;
					
					
					
						
				}
			?>
		</table>
	</body>
</html>