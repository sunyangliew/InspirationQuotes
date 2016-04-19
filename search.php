<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="shortcut icon" href="images/icon.ico">
<title>Inspiration Quotes</title>
</head>
<body>

	<div class="logo">
  		<a href="index.php">Inspiration Quotes</a>
	</div>

	<div class="navigation">
		<ul>
  			<li><a href="search.php">Search</a></li>
  			<li><a href="add.php">Add</a></li>
		</ul> 
	<div>

	<div class="search">
		<form id="searchquote" action="search.php" method="get">
			<p><input type="text" name="search" id="search" class="search"placeholder="Search"></p>

		<div id="radio_button">
			<p>
				<input type="radio" name="choice" value="author" checked="checked"><label class="label_search"> Author</label>
				<input type="radio" name="choice" value="genre"><label class="label_search"> Genre</label>
			</p>
		</div>

<?php

$getSearch = $_GET['search'];
$getChoice = $_GET['choice'];

$servername = "localhost";
$username = "kecy1lsn";
$password = "abcd1234~";
$dbname = "kecy1lsn_quote";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT quote, author, genre, image FROM quote WHERE $getChoice LIKE '%$getSearch%'";
$result = $conn->query($sql);
if($result->num_rows >0)
{
	//output data of each row
	while($row = $result->fetch_assoc())
	{
		$quote = $row['quote'];
		$author = $row['author'];
		$genre = $row['genre'];
		$image = $row['image']; 

		echo"<label>$quote - " . "$author</label><br><br>";
	}

}
else
{
	echo"<label>No results</label>";
}

?>

</form>
</div>

	<div class="footer">
        &copy; Copyright Sun Yang 2014
	</div>

</body>
</html>