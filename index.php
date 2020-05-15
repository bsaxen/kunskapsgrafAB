<?php
$sessdir = dirname(dirname(__FILE__)).'/session_dir';
ini_set('session.save_path', $sessdir); 
session_start();
$sel_content = $_SESSION["sel_content"];
if ($sel_content == NULL)
    $sel_content = 'home';

if (isset($_GET['do']))
{
  $sel_content = $_GET['do'];

}


$_SESSION["sel_content"] = $sel_content; 
?>
<!DOCTYPE html>
<html lang="se">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('vinter.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  /*color:red;*/
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
  font-size: 35px;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
  /*height: 100px;*/ /* Should be removed. Only for demonstration */
}

/* Left and right column */
.column.side {
  width: 25%;
  /*background-color:white;*/
}

/* Middle column */
.column.middle {
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}

/* unvisited link */
a:link {
  color: black;
  text-decoration: none;
}

/* visited link */
a:visited {
  color: black;
}

/* mouse over link */
a:hover {
  color: blue;
}

/* selected link */
a:active {
  color: black;
}

</style>
</head>

<body>

<div class="header">
  <img src="kunskapsgraf_logo.png" alt="kunskapsgraf_logo" height="120" width="500">
</div>

<div class="row">
  <div class="column side" >
  <ul>
  <li><a href="index.php?do=presentations">presentationer</a></li>
  <li><a href="index.php?do=training">utbildning</a></li>
  <li><a href="index.php?do=projects">projekt</a></li>
  <li><a href="index.php?do=contact">kontakt</a></li>
  </ul>
  </div>
  
  
  <div class="column middle" >
  <?php
    include "content/$sel_content.php";
  ?>
  </div>


  <div class="column side" >
  <ul>
  <li><a href="index.php?do=graphtechnology">grafteknologi</a></li>
  <li><a href="index.php?do=graphtheory">grafteori</a></li>
  <li><a href="index.php?do=links">länkar</a></li>
  </ul>
  </div>
</div>

<div class="footer">
  <a href="index.php?do=home">2020 kunskapsgraf AB</a>
</div>

</body>

</html>
<?php

?>
