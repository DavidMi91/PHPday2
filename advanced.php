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




<form method="POST" action="advanced.php">
<div class="container mt-5">
  <div class="mb-3">
    <label for="exampleAge1" class="form-label">Fahrenheit input</label>
    <input type="number" class="form-control" id="exampleInputAge1" name="fahrenheit">

  </div>
    <div>

    </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>   
<div>
<?php
// fahrenheit to celsius formula: (32°F − 32) × 5/9 = 0°C

$fahrenheitInput ="";
// this function converts fahrenheit to celsius 
function convertFahrenheitToCelsius($x){
    $celsius = ($x-32)*5/9;
    return $celsius;
}
// upon pressing submit, show very cold, cold etc. and respective image
if(isset($_POST["submit"])){
    if(convertFahrenheitToCelsius($_POST["fahrenheit"]) >= 0 && convertFahrenheitToCelsius($_POST["fahrenheit"]) <= 5){
        $fahrenheitInput="<div class='text-primary'>".convertFahrenheitToCelsius($_POST["fahrenheit"])."°C <br>Very cold <br> <img src='https://i.insider.com/5a53d0c4ec1ade0e533fe907?width=700'></img></div>";
    } elseif(convertFahrenheitToCelsius($_POST["fahrenheit"]) > 5 && convertFahrenheitToCelsius($_POST["fahrenheit"]) <= 10) {
        $fahrenheitInput="<div class='text-secondary'>".convertFahrenheitToCelsius($_POST["fahrenheit"])."°C <br>Cold <br> <img src='https://images.twnmm.com/c55i45ef3o2a/467AICmUSVISv4HlMdlxLs/caca30e795436bfb0f8695a34ad7be5f/GETTY_cold.jpg'></img></div>";
    } elseif(convertFahrenheitToCelsius($_POST["fahrenheit"]) > 10 && convertFahrenheitToCelsius($_POST["fahrenheit"]) <= 15) {
        $fahrenheitInput="<div class='text-warning'>".convertFahrenheitToCelsius($_POST["fahrenheit"])."°C <br>Pleasant <br> <img src='https://m.media-amazon.com/images/I/914Z5nY0zkL._SS500_.jpg'></img></div>";
    } elseif(convertFahrenheitToCelsius($_POST["fahrenheit"]) > 15 && convertFahrenheitToCelsius($_POST["fahrenheit"]) <= 20) {
        $fahrenheitInput="<div class='text-success'>".convertFahrenheitToCelsius($_POST["fahrenheit"])."°C <br>Warm <br> <img src='https://e3.365dm.com/21/04/768x432/skynews-easter-weather_5329513.jpg?20210404081734'></img></div>";
    } elseif(convertFahrenheitToCelsius($_POST["fahrenheit"]) > 20) {
        $fahrenheitInput="<div class='text-danger'>".convertFahrenheitToCelsius($_POST["fahrenheit"])."°C <br>Hot  <br> <img src='https://www.kindpng.com/picc/m/64-640053_28-collection-of-hot-weather-clipart-png-hot.png'></img></div>";
    } else{
        $fahrenheitInput="<div class='text-info'>".convertFahrenheitToCelsius($_POST["fahrenheit"])."°C <br>Below zero brrr  <br> <img src='https://www.vmcdn.ca/f/files/baytoday/images/weather/brrr!-cold-turl-1-2016.jpg;w=960'></img></div>";
    }
    echo $fahrenheitInput;
}
?>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>