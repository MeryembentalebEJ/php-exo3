<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php part3 </title>
    <style>
        *{
            padding: 0;
            margin: 0
        }
        h1{
            color: red;
            text-align: center;
            min-height: 20vh;
            
        }
        h2{
            min-height: 5vh;
            color: #9bafd9;
            max-width: 300px;
            text-align: center;
            margin-top: 3rem;
        }
        p{
            min-height: 5vh;
            color: #103783;
            font-size: 20px;
        }

    </style>

</head>
<body>
    <!-- Exo part 3 -->
 <h1>Part 3</h1>
 <h2>Exo 1</h2>
 <p>Créez une fonction qui retourne un booléen.</p>
<?php 
 function notes(){
     return true;
 }
 echo notes();
?>

<h2>Exo 2</h2>
<p>Créez une fonction qui retourne une chaîne de caractère</p>
<h3><?php 
$list = 'My name is Meryem';
function textBack($string = 'Hello'){
    return $string;
}
echo textBack();
?></h3>

<h2>Exo 3</h2>
<p>Créez deux variables contenant chacune une string. Créez une fonction qui retourne le contenu de ces deux variable.</p>
<h3> <?php 
 $name = 'Meryem Bentaleb';
 $job = 'Developpeuse web et web mobile';
 $place = 'au sein de DesCodeuses .';
 function presentation($partOne, $partTwo, $partThree){
     $finalPresentation = $partOne. ' ' .$partTwo. ' ' .$partThree;
     return $finalPresentation;
 }
 echo presentation($name, $job, $place);
?></h3>


<h2>Exo 4</h2>
 <p>Créez une fonction qui retourne deux nombres aléatoire allant de 1 à 15. Si le premier nombre est plus grand que le deuxième affichez "le premier nombre est plus grand que le deuxième" sinon si le deuxième nombre est plus grand affichez "le premier nombre est plus petit que le deuxième". affichez "les deux nombres sont égaux" si les deux nombres sont identiques.</p>
 <h3><?php 
 
 ?></h3>
</body>
</html>