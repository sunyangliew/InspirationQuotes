<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="stylesheet.css">
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
</div>

<div class="submit">

<?php
$getQuote = $_POST['quote'];
$getAuthor = $_POST['author'];
$getGenre = $_POST['genre'];
$getImage = basename( $_FILES["image"]["name"]);

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// if everything is ok, try to upload file
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
    {
        echo "<p><br><br>The file ". basename( $_FILES["image"]["name"]). " has been uploaded.</p>";
    } else 
    {
        $getImage = "default.jpg";
        echo "<p><br><br>No image file detected</p>";
    }

$servername = "localhost";
$username = "kecy1lsn";
$password = "abcd1234~";
$dbname = "kecy1lsn_quote";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//SQL query
$sql = "INSERT INTO quote (quote, author, genre, image) VALUES ('$getQuote', '$getAuthor', '$getGenre', '$getImage')";

if ($conn->query($sql) === TRUE) {
    echo "<p>New quote added successfully<br><br></ul>";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
</div>
  <div class="footer">
        &copy; Copyright Sun Yang 2014
  </div>
</body>

</html>