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
  </div>  

  <div class="add">
    <h1> Add New Quotes </h1>

    <form id="addquote" action="submit.php" method="post" enctype="multipart/form-data">

      <p><input type="text" name="quote" id="quote" placeholder="Insert Quote Here" required /></p>
    
      <p><input type="text" name="author" id="author" placeholder="Insert Author Here" required /></p>
    
      <p>
        <select name="genre" id="genre">
          <option value="" disabled selected>Select Genre</option>
          <option value="life">Life</option>
          <option value="love">Love</option>
          <option value="laughter">Laughter</option>
        </select>
      </p>

      <p><input type="file" name="image" id="image"></p>
      <p><input name="submit" id="btn" type="submit" value="Submit" /></p>

    </form>
  <div>

  <div class="footer">
        &copy; Copyright Sun Yang 2014
  </div>

</body>
</html>