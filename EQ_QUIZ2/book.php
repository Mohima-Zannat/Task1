<?php 
	
	
	require_once 'model/db_connect.php';
	
	function searchBook($text)
	{
		$query="select * from books where name like '%$text%'";
		$result = get($query);
		//echo "yo";
		return $result;
	}

	function bookInfo($id)
	{
		$query="select * from books where id='$id'";
		$result = get($query);
		return $result;
	}
	
	$id=$_GET["id"];
	$result=bookInfo($id);
?>
<html>
	<head>
		<title>book page</title>
	</head>
	<body>
		<h1>books</h1>
		
		<table border=".5">
			<tr>
				<td>ID : </td>
				<td><?php echo $result[0]["id"]; ?></td>
			</tr>
			<tr>
				<td>Name : </td>
				<td><?php echo $result[0]["name"]; ?></td>
			</tr>
			<tr>
				<td>Author : </td>
				<td><?php echo $result[0]["author"]; ?></td>
			</tr>
			<tr>
				<td>Edition : </td>
				<td><?php echo $result[0]["edition"]; ?></td>
			</tr>
		</table>
	</body>	
</html>