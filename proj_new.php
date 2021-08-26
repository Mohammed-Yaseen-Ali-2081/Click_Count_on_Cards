<?php

require_once("Db.php");

$database= new Db("ali","click","localhost","Ali","php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Website</title>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>


<style>
input[type=button],
      input[type=submit] {
margin-bottom:5px;
margin-top:5px;
border-radius:100px;
font-size:18px;
background-color: pink;
  color: black;
  border: 2.5px solid #555555;
box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
width: 50%;
}
</style>


<body>
<div class="jumbotron text-center">
  <h1>Sample Click Count Project :)</h1>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="card">
  <img class="card-img-top" src="images/1.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Product 1</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <form method="post">
        <input type="submit" name="button1"
                class="button" value="Button1" />
              </form>
  </div>
</div>                                         
    </div>


<div class="col-sm-4">
      <div class="card">
  <img class="card-img-top" src="images/2.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Product 2</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <form method="post">
        <input type="submit" name="button2"
                class="button" value="Button2" />
              </form>  </div>
</div>
    </div>


<div class="col-sm-4">
      <div class="card" >
  <img class="card-img-top" src="images/3.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Product 3</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <form method="post">
        <input type="submit" name="button3"
                class="button" value="Button3" />
              </form>
  </div>
</div>
    </div>
    </div>
  </div>
</div>




<?php

 function update($dbname,$tablename,$servername,$username,$password,$id){

  $con=mysqli_connect($servername,$username,$password,$dbname);

  if(!$con){
    die("Connection Failed : ".mysqli_connect_error());

  }

  $sql = "INSERT INTO click (id,Click_Count)
VALUES ('$id',1) ON DUPLICATE KEY UPDATE    
Click_Count=Click_Count+1";

if(!mysqli_query($con,$sql)){
  echo "Error: " . $sql . "<br>" . $con->error;
}
}

if(isset($_POST['button1'])) {
            update("ali","click","localhost","Ali","php",1);
        }

if(isset($_POST['button2'])) {
            update("ali","click","localhost","Ali","php",2);
        }

if(isset($_POST['button3'])) {
            update("ali","click","localhost","Ali","php",3);
        }

?>

</body>
</html>