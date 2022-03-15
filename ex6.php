<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Day 2 Classwork ex2</title>
</head>
<body>



<form method="POST" action="ex6.php">
<div class="container mt-5">
  <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Surname</label>
    <input type="text" class="form-control" id="exampleInputName1" name="surname">
  </div>
  <div class="mb-3">
    <label for="exampleInputName2" class="form-label">First name</label>
    <input type="text" class="form-control" id="exampleInputName2" name="firstname">
  </div>
  <div class="mb-3">
    <label for="exampleAge1" class="form-label">Age</label>
    <input type="number" class="form-control" id="exampleInputAge1" name="age">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>   
<div>
<?php

$coloredsurname ="";
$surnamecolour= "text-primary";
    if(isset($_POST["submit"])){
        if(strlen($_POST["surname"]) > 5){
            $surnamecolour="text-success";
        } elseif(strlen($_POST["surname"]) <= 5) {
            $surnamecolour="text-danger";;
        }
        echo "<div class='$surnamecolour'>".$_POST['surname']."</div>";
    }
?>

</div>

<form method="GET" action="ex6.php">
<div class="container mt-5">
  <div class="mb-3">
    <label for="exampleInputHobbies1" class="form-label">Hobbies</label>
    <input type="text" class="form-control" id="exampleInputHobbies1" name="hobbies">
  </div>

  <button type="submit" name="submit1" class="btn btn-primary">Submit</button>
</form> 
<div>
<?php

$coloredsurname ="";
$surnamecolour= "text-primary";
    if(isset($_GET["submit1"])){
        echo $_GET['hobbies'];
    } else {

    }
?>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>