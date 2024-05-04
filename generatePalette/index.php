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
if (isset($_POST['numR'])){
    $cant = $_POST['numR'];
}else{
    $cant = 5;
}

    
for($j = 0; $j < $cant; $j++){
    //Generar los colores
    $r = rand(0, 255);
    $g = rand(0, 255);
    $b = rand(0, 255);
    //Guardar los colores en un array
    $redArray [$j] = $r;
    $greenArray [$j] = $g;
    $blueArray [$j] = $b;
}


//Se comprueba si se ha seleccionado el checkbox RGB

//Checkear de menor a mayor
if(isset($_REQUEST['checkR'])) {
$checkR = "checked";
rsort ($redArray);
echo "<script> console.log('Rojo Sort mayor a menor') </script>";
}else{$checkR = "";}
if(isset($_REQUEST['checkG'])) {
$checkG = "checked";
rsort ($greenArray);
echo "<script> console.log('Verde Sort mayor a menor') </script>";
}else{$checkG = "";}
if(isset($_REQUEST['checkB'])) {
$checkB = "checked";
rsort ($blueArray);
echo "<script> console.log('Azul Sort mayor a menor') </script>";
}else{$checkB = "";}
//Checkear de menor a mayor
if(isset($_REQUEST['checkRR'])) {
$checkRR = "checked";
sort ($redArray);
echo "<script> console.log('Rojo Sort menor a mayor') </script>";
}else{$checkRR = "";}
if(isset($_REQUEST['checkGR'])) {
$checkGR = "checked";
sort ($greenArray);
echo "<script> console.log('Verde Sort menor a mayor') </script>";
}else{$checkGR = "";}
if(isset($_REQUEST['checkBR'])) {
$checkBR = "checked";
sort ($blueArray);
echo "<script> console.log('Verde Sort menor a mayor') </script>";
}else{$checkBR = "";}
    

//Crear un array para concatenar los colores
for($j = 0; $j < $cant; $j++){
    //Se concatenan los colores
    $color = "RGB($redArray[$j], $greenArray[$j], $blueArray[$j])";
    //Guardar los colores en un array
    $colores[$j] = $color;   
}
?>
</div>
<div>
    <form action="index.php?<?php echo $cant ?>" method="POST">
        <label for="num" style="color: white; font-size: 15px"><b>Ingrese la cantidad<br> de colores:</b></label><br><br>
        <input type="number" id="num" name="numR" min="2" max="10" value="<?php echo "$cant"; ?>" required> <br><br>

        <div class="checkbox-group">
        <input type="checkbox" class="checkboxRGB" id="checkboxR" name="checkR" value="check" <?php echo "$checkR"; ?>> <label for="checkbox" style="color: white; font-size: 15px"><b>Rojo Sort mayor a menor</b></label><br><br>
        <input type="checkbox" class="checkboxRGB" id="checkboxG" name="checkG" value="check" <?php echo "$checkG"; ?>> <label for="checkbox" style="color: white; font-size: 15px"><b>Verde Sort mayor a menor</b></label><br><br>
        <input type="checkbox" class="checkboxRGB" id="checkboxB" name="checkB" value="check" <?php echo "$checkB"; ?>> <label for="checkbox" style="color: white; font-size: 15px"><b>Azul Sort mayor a menor</b></label><br><br>
        </div>

        <!--Generar de menor a llayor-->
        <div class="checkbox-group">
        <input type="checkbox" class="checkboxRGBR" id="checkboxRR" name="checkRR" value="check" <?php echo "$checkRR"; ?>> <label for="checkbox" style="color: white; font-size: 15px"><b>Rojo Sort menor a mayor</b></label><br><br>
        <input type="checkbox" class="checkboxRGBR" id="checkboxGR" name="checkGR" value="check" <?php echo "$checkGR"; ?>> <label for="checkbox" style="color: white; font-size: 15px"><b>Verde Sort menor a mayor</b></label><br><br>
        <input type="checkbox" class="checkboxRGBR" id="checkboxBR" name="checkBR" value="check" <?php echo "$checkBR"; ?>> <label for="checkbox" style="color: white; font-size: 15px"><b>Azul Sort menor a mayor</b></label><br><br>
        </div>

        <input type="submit" value="Generar" 
       title="Atheros Learning Platform"
       class='cta-button' >
    </form>
</div>
<?php
//Imprimir los colores
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

<p style="color: white">Made by: Jorge Mira <br><b>Version: 3.0 &#169;</b></p>

<script src="script.js"></script>
</body>
</html>