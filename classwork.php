<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Day 2 Classwork ex1</title>
</head>
<body>

<?php
// var_dump($_GET);
// if(isset($_GET["submit"])){
//     echo $_GET["surname"];
//     echo $_GET["firstname"];   
// }

// var_dump($_POST);
$err_surname ="";
$err_firstname ="";
if(isset($_POST["submit"])){
    // echo "Surname:".$_POST["surname"];
    // echo "First name:".$_POST["firstname"];   

    if(empty($_POST["surname"])){
        $err_surname="Please enter a surname";
    } elseif(empty($_POST["firstname"])) {
        $err_firstname="Please enter a firstname";
    } else {
        echo "Welcome ".$_POST["firstname"]." ".$_POST["surname"];
    }
}
?>

<form method="POST" action="classwork.php">
<div class="container mt-5">
  <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Surname</label>
    <input type="text" class="form-control" id="exampleInputName1" name="surname">
    <div class="text-danger"><?php echo $err_surname ?></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputName2" class="form-label">First name</label>
    <input type="text" class="form-control" id="exampleInputName2" name="firstname">
    <div><?php echo $err_firstname ?></div>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>