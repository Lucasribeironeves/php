<?php
#Espaço para a declaração de variáveis 

$enderecoLattes="9452354326162630012";  
$ultimatuali="Não sei";
$nome="Lucas Ribeiro Neves";
$enderecoprof="Tibau do Sul ";
$logradouro= "Rua do comércio" ;
$bairro="Centro"; 
$cidade= "Tibau do Sul" ;
$estado= "RN";
$cep="59178000" ;
$tel= "4002-8922"; 
$formacad="Ensimo médio incompleto";
$titulo="Curso técnico"; 
$institu="IFRN"; 
$pddu="4 anos"; 
$vinst="Não sei"; 
$periodo="Vespertino"; 
$cargo="Estudante" ;
$cargahoraria="1000 hrs"; 
$perid="2022 a 2023";  
$tituloo="projeto " ;
$resumo="projetos "; 
$ing="baixo"; 
$esp="básico"; 
$fran="baixo"; 
$foto="fotoperfil.jpg"



?>

<!DOCTYPE html>
<html>
<head>
<title>Currículo Vitae</title>
<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='curriculo.css'>
    <script src='main.js'></script>
</head>
<body>
<table align="center">
    <tr>
        <td colspan="3"><h1>Curriculo Lil Keiny</h1></td>
    </tr>
    <tr>
        <td style="width: 250px">
            <img src="<?php echo "$foto"?>" alt="Foto Curriculo" width="250" height="350">
        </td>
        <td colspan="2" style="text-align: left;">
            <p>Endereço Lattes: <?php echo "$enderecoLattes"?></p>
            <p>Última Atualização: <?php echo "$ultimatuali"?></p>
        </td>
    </tr>
    <tr>
        <td colspan="3"><h2>Identificação</h2></td>
    </tr>
    <tr>
        <td colspan="2">
            <p>Nome: </p>
            <p>Endereço Profissional: </p>
            <p>Logradouro: </p>
            <p>Bairro: </p>
            <p>Cidade: </p>
            <p>Estado: </p>
            <p>CEP: </p>
            <p>Telefone: </p>
        </td>
        <td>  
        <p><?php echo "$nome"?></p> 
        <p><?php echo "$enderecoprof"?> </p>
        <p><?php echo "$logradouro"?> </p> 
        <p><?php echo "$bairro"?> </p>
        <p><?php echo "$cidade"?> </p> 
        <p><?php echo "$estado"?> </p>
        <p><?php echo "$cep"?> </p>
        <p><?php echo "$tel"?> </p>

            
        </td>
    </tr>
    <tr>
        <td colspan="3"><h2>Formação Acadêmica</h2></td>
    </tr>
    <tr>
        <td colspan="2">
            <p>Título: </p>
            <p>Instituição: </p>
            <p>Período de duração: </p>
        </td>
        <td>
        <p> <?php echo "$titulo"?> </p> 
        <p> <?php echo "$institu"?> </p> 
        <p> <?php echo "$pddu"?> </p>
        </td>
    </tr>
    <tr>
        <td colspan="3"><h2>Atuação Profissional</h2></td>
    </tr>
    <tr>
        <td colspan="2">
            <p>Vínculo Institucional </p>
            <p>Período: </p>
            <p>Cargo: </p>
            <p>Carga-horária: </p>
        </td>
        <td>
        <p> <?php echo "$vinst"?> </p> 
        <p> <?php echo "$periodo"?> </p> 
        <p> <?php echo "$cargo"?> </p> 
        <p> <?php echo "$cargahoraria"?> </p>
        </td>
    </tr>
    <tr>
        <td colspan="3"><h2>Projetos</h2></td>
    </tr>
    <tr>
        <td colspan="2">
            <p>Período: </p>
            <p>Título: </p>
            <p>Resumo:</p>
        </td>
        <td>
        <p> <?php echo "$perid"?> </p>  
        <p> <?php echo "$tituloo"?> </p> 
        <p> <?php echo "$resumo"?> </p>
        </td>
    </tr>
    <tr>
        <td colspan="3"><h2>Idiomas</h2></td>
    </tr>
    <tr>
        <td colspan="2">
            <p>Inglês - Nível: </p>
            <p>Espanhol - Nível: </p>
            <p>Francês - Nível: </p>
        </td>
        <td>
        <p> <?php echo "$ing"?> </p> 
        <p> <?php echo "$esp"?> </p> 
        <p> <?php echo "$fran"?> </p>
        </td>
    </tr>
</table>
</body>
</html>