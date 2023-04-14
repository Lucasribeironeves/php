<?php 

    $botao = "";
    $msg = "";
    $nota1 = "";
    $nota2 = "";
    $nota3 = "";
    $nota4 = "";
    $media = "";
    
    if(isset ($_POST["calcular"])){
        $botao = $_POST["calcular"];
    
        if(isset ($_POST["nota1"])){
            $nota1 = $_POST["nota1"];
        }   

        if(isset ($_POST["nota2"])){
            $nota2 = $_POST["nota2"];
        }  
        if(isset ($_POST["nota3"])){
            $nota3 = $_POST["nota3"];
        }  
        if(isset ($_POST["nota4"])){
            $nota4 = $_POST["nota4"];
        }  
        
        $media = ($nota1*2 + $nota2*2 + $nota3 *3 + $nota4 * 3) /10; 

        $msg = "O valor da média " . $media;
        
    }
?>
    

<!DOCTYPE html> 
<html> 
<head> 

    <link rel="stylesheet" href="calculo_media.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Média </title>
</head>
    <body>
    <form action="calculo_mediaIFRN.php" method="post"> 

    <h2> Calculo da Média - IFRN </h2>

<table>
    <tr class = td2>
        <p> <td class = msgg  >Mensagens: <?php echo $msg ?> </td> </p>
        <td class = msgg></td> 
        
    </tr>

    <br>
    <tr>
        <td><label for="lb1">Nota 1:</td>
        <td><input type="text" name="nota1"></td>
    </tr>
    <tr>
        <td><label for="lb2">Nota 2:</td>
        <td><input type="text" name="nota2"></td>
    </tr>
    <tr>
        <td><label for="lb3">Nota 3:</td>
        <td><input type="text" name="nota3"></td>
    </tr>
    <tr>
        <td><label for="lb4">Nota 4:</td>
        <td><input type="text" name="nota4"></td>
    </tr>
    
     <td colspan=2 >  <p class= botao> <input type="submit" name="Calcular"></p></td> 
   
</table>

</form>
</body> 
</html>