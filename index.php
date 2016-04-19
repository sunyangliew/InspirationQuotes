<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="shortcut icon" href="images/icon.ico">
<title>Inspiration Quotes</title>

<script type="text/javascript">

//run randomPic javascript when load
window.onload = randomPic;
var myVar=setInterval(function(){nextImg()},5000);

//array variables to store data
var x = ["x"];
var y = ["y"];
var z = ["z"];
var randomNum = 0;

//use php codes to output javascript codes so that variables from php codes
//can be used in javascript
<?php
$servername = "localhost";
$username = "kecy1lsn";
$password = "abcd1234~";
$dbname = "kecy1lsn_quote";
$loop = 0;

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT id, quote, author, genre, image FROM quote";

$result = $conn->query($sql);
if($result->num_rows >0)
{
  //output data of each row
  while($row = $result->fetch_assoc())
  {
    $id = $row['id'];
    $quote = $row['quote'];
    $author = $row['author'];
    $genre = $row['genre'];
    $image = $row['image']; 
    
    // output javascript codes using echo
    echo "x[$loop]=\"$quote" . "\";";
    echo "y[$loop]=\"$author". "\";";
    echo "z[$loop]=\"$image". "\";";

    $loop++;
  }

  }
  else
  {
    echo"No results";
  }

$conn->close();
?>

//javascript for display random background image
function randomPic() 
{
  randomNum = Math.floor((Math.random() * x.length));
  document.getElementById("header1").innerHTML = x[randomNum];
  document.getElementById("header2").innerHTML = y[randomNum];
  document.body.style.backgroundImage = "url('images/"+ z[randomNum] + "')";
}

//javascript to navigate to next image
//copyright sunyang 2014
function nextImg()
{
  if(randomNum < (x.length - 1)) //check when has reach the final index of array
  {
    randomNum++;
    document.getElementById("header1").innerHTML = x[randomNum];
    document.getElementById("header2").innerHTML = y[randomNum];
    document.body.style.backgroundImage = "url('images/"+ z[randomNum] + "')";
  }
  else
  {
    randomNum = 0;
    document.getElementById("header1").innerHTML = x[randomNum];
    document.getElementById("header2").innerHTML = y[randomNum];
    document.body.style.backgroundImage = "url('images/"+ z[randomNum] + "')";
  }
}


//javascript to navigate to previous image
//copyright sunyang 2014
function prevImg()
{
  if(randomNum > 0)
  {
    randomNum--;
    document.getElementById("header1").innerHTML = x[randomNum];
    document.getElementById("header2").innerHTML = y[randomNum];
    document.body.style.backgroundImage = "url('images/"+ z[randomNum] + "')";
  }
  else
  {
    randomNum = (x.length -1);
    document.getElementById("header1").innerHTML = x[randomNum];
    document.getElementById("header2").innerHTML = y[randomNum];
    document.body.style.backgroundImage = "url('images/"+ z[randomNum] + "')";
  }
}

</script>
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

  <div class ="main">
    <h1 id="header1">Header1</h1>
    <h2 id="header2">Header2</h2>

    <p class="next"><a><img src="images/arrow_right.svg" onclick="nextImg()"></a></p>
    <p class="prev"><a><img src="images/arrow_left.svg" onclick="prevImg()"></a></p>
  </div>

  <div class="footer">
        &copy; Copyright Sun Yang 2014
  </div>

</body>
</html>