
<?php

$passwordLenght = $_GET["lunghezzaPassword"];

 /* $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, count($alphabet)-1);
        $pass[$i] = $alphabet[$n];
        
    }*/

function test(){
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $passwordArray = [];
    $alphabetLenght = strlen($alphabet);

    for ($i = 0; $i < 8; $i++) {
        $random = rand(0, $alphabetLenght);
    
        $passwordArray[$i] = $alphabet[$random];
    }


    return $passwordArray ;
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body data-bs-theme="dark" >

<div class="container">


<form method="GET" action="index.php">
 <label for="lunghezzaPassword">Inserisci la lungezza della password : </label>
 <input type="number" name="lunghezzaPassword" id="lunghezzaPassword" min="0">
 <input type="submit">
</form>    


<div>
<span>la lunghezza inserita è : </span>  
<span> <?php echo $passwordLenght?> </span>
</div>

    

<p>

<?php
           
           for ($i = 0; $i < 8; $i++){
            echo test()[$i];
           }
       
    

        
?>

</p>



</div>
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>