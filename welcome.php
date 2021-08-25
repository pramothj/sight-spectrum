<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <div class="img">
    <img src="image.jpg">
</div>
     <div class="hello">
    <?php echo "<h2>Welcome " . $_SESSION['username'] . "</h2>"; ?>
      </div>    
<div class="out">
    <a href="logout.php"><button class="button">Logout</button></a>
    </div>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.hello{
   left:10px;
   position:relative;

}
.img{
  left:10px;
  position:relative;
  top:10px;

}
.out
{
  position: absolute;
  top:1px;
  right: 20px;
  text-align: center;
  text-decoration: none;
  font-size: 10px;

}
.card {
  box-
  transition: 0.3s;
  width: 80%;
  border-radius: 15px;
}
.card1 {
  box-shadow: 0 5px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 80%;
  border-radius: 15px;
}
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.card1:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
 margin-bottom: 4rem;
}

.container1 {
  padding: 2px 16px;
  margin-bottom: 1rem;
}
.button {
  background-color: blue;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 14px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

.button4 {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}

.button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
}
.fixed-header, .fixed-footer{
        width: 100%;
        position: fixed;        
         background-image:url("lime.jpg");
        padding: 10px 0;
        color: white;
    }
    .fixed-header{
        top: 0;
    }
    .fixed-footer{
        bottom: 0;
    }
  
    nav a{
        color: #fff;
        text-decoration: none;
        padding: 7px 25px;
        display: inline-block;
    }

</style>
</head>

<div class="card">
  
  <div class="container">
 <form action="logicalreasoning_instructions.html">
  <h2><b>LOGICAL REASONING</b></h2> 
  <button class="button button1">START TEST</button>
</form>
    
    
  </div>
</div><B>
<B>
<B>
<div class="card1">
  
  <div class="container1">
 <form action="aptitude_instructions.html">
  <h2><b>APTITUDE</b></h2> 
  <button class="button button1">START TEST</button>
</form>
<div class="fixed-footer">
        <div class="container">Copyright &copy; 2016 Your Company</div>        
    </div>

    
    
  </div>
</div>
</body>
</html>