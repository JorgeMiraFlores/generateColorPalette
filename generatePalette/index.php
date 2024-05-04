<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paletas de color al azar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div>
<?php
//Para ingresar la cantidad deseada :D
if (isset($_POST['num'])){
    $cant = $_POST['num'];
}else{
    $cant = 5;
}

for($j = 0; $j < $cant; $j++){
    $r = rand(0, 255);
    $g = rand(0, 255);
    $b = rand(0, 255);
    //Guardar los colores en un array
    $redArray [$j] = $r;
    $greenArray [$j] = $g;
    $blueArray [$j] = $b;
}

rsort ($redArray);
rsort ($greenArray);
rsort ($blueArray);

for($j = 0; $j < $cant; $j++){
    //Concatenar los colores
    $color = "RGB($redArray[$j], $greenArray[$j], $blueArray[$j])";
    $colores[$j] = $color;   
}
for($i = 0; $i < $cant; $i++){
    echo "
    <div class='parent'>
        <div class='div1' style='background-color: $colores[$i]; border: 1px solid black;'> 
        </div>
        <div class='div2'> 
            <input type='text' value='$colores[$i]' class='copy' readonly> <br> <br>
            <button onclick='myFunction()'>Copy text</button>
        </div>
    </div>";
}

?>
</div>
<div>
    <form action="index.php?<?php echo $cant ?>" method="POST">
        <label for="num" style="color: white; font-size: 15px"><b>Ingrese la cantidad<br> de colores:</b></label><br><br>
        <input type="number" id="num" name="num" min="2" max="10" value="<?php $cant ?>" required> <br><br>
        <input type="submit" value="Generar" 
       title="Atheros Learning Platform"
       class='cta-button' >
    </form>
</div>

<p style="color: white">Made by: Jorge Mira <br><b>Version: 1.2 &#169;</b></p>

<script src="script.js"></script>
</body>
</html>