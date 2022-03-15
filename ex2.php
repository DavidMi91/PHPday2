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

<?php
// ex2

$int1 = 16;
$int2 = 4;

function divide($x, $y){
    $result = $x / $y;
    return $result;
}
echo  "Exercise 2: ".divide($int1,$int2);


// ex3

$gradeeng = 2;
$grademath = 1;
$gradephys = 3;
function sum1($x1, $y1,$z1){
    $sumresult = $x1 + $y1 + $z1;
    return $sumresult;
}
echo "<br> Exercise 3: ".sum1($gradeeng,$grademath,$gradephys);



// ex4

$height = 2;
$width = 7;
$depth = 5;
function areavolume($x1, $y1,$z1){
    $area = $x1 * $y1;
    $volume = $x1 * $y1 * $z1;
    return array($area,$volume);
}
echo "<br> Exercise 4: <br>Height: $height <br> Width: $width <br> Depth: $depth";
echo "<br>The area of the box is ".areavolume($height,$width,$depth)[0]." and the volume of the box is ".areavolume($height,$width,$depth)[1].".";

//ex5

$minutes = 200;

function minuteconversion($x){
    $hours = intdiv($x, 60);
    $leftoverminutes = $x - ($hours*60);
    return array($hours,$leftoverminutes);
}
echo "<br> Exercise 5<br>$minutes minutes = ".minuteconversion($minutes)[0]." hour(s) and ".minuteconversion($minutes)[1]."minute(s).";


//ex6



// $err_surname ="";
// $err_firstname ="";
// if(isset($_POST["submit"])){
//     // echo "Surname:".$_POST["surname"];
//     // echo "First name:".$_POST["firstname"];   

//     if(empty($_POST["surname"])){
//         $err_surname="Please enter a surname";
//     } elseif(empty($_POST["firstname"])) {
//         $err_firstname="Please enter a firstname";
//     } else {
//         echo "Welcome ".$_POST["firstname"]." ".$_POST["surname"];
//     }
// }
$coloredsurname ="";

    if(isset($_POST["submit"])){
        if(strlen($_POST["surname"] > 5)){
            $coloredsurname="<div class='text-success'>".$_POST['surname']."</div>";
        } elseif(strlen($_POST["surname"] < 5)) {
            $coloredsurname="<div class='text-danger'>".$_POST['surname']."</div>";
        }
    }




?>


<form method="POST" action="ex2.php">
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
    <div>

    </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>   
<div>
    <?php echo strlen($coloredsurname) ?>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>