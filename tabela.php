<?php
 
 include_once ("hoje.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="31.css">
    <title>Document</title>
</head>
<body>

    <h1>Dados do Aluno</h1>

<div class="principal">

<table>
<tr>
    <td>Nome Completo</td>
<td>
    <?php
    echo$_GET ['nome'];
    ?>
    </td>
</tr>
<tr>
    <td>RG </td>
<td>
    <?php
    echo$_GET ['rg'];
    ?>
    </td>
</tr>
<tr>
    <td>Orgão de expedição</td>
<td>
    <?php
    echo$_GET ['orgao'];
    ?>
    </td>
</tr>
<tr>
    <td>CPF </td>
<td>
    <?php
    echo$_GET ['CPF'];
    ?>
    </td>
</tr>
<tr>
    <td>Telefone</td>
<td>
    <?php
    echo$_GET ['tel'];
    ?>
    </td>
</tr>
<tr>
    <td>Email</td>
<td>
    <?php
    echo$_GET ['email'];
    ?>
    </td>
</tr>

<tr>
    <td>Curso</td>
<td>
    <?php
    echo$_GET ['curso'];
    ?>
    </td>
</tr>

<tr>
    <td>Matricula</td>
<td>
    <?php
    echo$_GET ['matricula'];
    ?>
    </td>
</tr>

<tr>
    <td>Endereço</td>
<td>
    <?php
    echo$_GET ['endereco'];
    ?>
    </td>
</tr>

<tr>
    <td>Número</td>
<td>
    <?php
    echo$_GET ['numero'];
    ?>
    </td>
</tr>

<tr>
    <td>Bairro</td>
<td>
    <?php
    echo$_GET ['bairro'];
    ?>
    </td>
</tr>

<tr>
    <td>Município</td>
<td>
    <?php
    echo$_GET ['municipio'];
    ?>
    </td>
</tr>

<tr>
    <td>CEP</td>
<td>
<?php
    echo$_GET ['cep'];
    ?>
    
   
    </td>
</tr>



</table>

<form action="editar.php" method="get">
<input type="hidden" name="nome" value="<?php echo$_GET ['nome']?>">
    <input type="hidden" name="rg" value="<?php echo$_GET ['rg']?>">
    <input type="hidden" name="orgao" value="<?php echo$_GET ['orgao']?>">
    <input type="hidden" name="CPF" value="<?php echo$_GET ['CPF']?>">
    <input type="hidden" name="tel" value="<?php echo$_GET ['tel']?>">
    <input type="hidden" name="email" value="<?php echo$_GET ['email']?>">
    <input type="hidden" name="curso" value="<?php echo$_GET ['curso']?>">
    <input type="hidden" name="matricula" value="<?php echo$_GET ['matricula']?>">
    <input type="hidden" name="endereco" value="<?php echo$_GET ['endereco']?>">
    <input type="hidden" name="numero" value="<?php echo$_GET ['numero']?>">
    <input type="hidden" name="bairro" value="<?php echo$_GET ['bairro']?>">
    <input type="hidden" name="municipio" value="<?php echo$_GET ['municipio']?>">
    <input type="hidden" name="cep" value="<?php echo$_GET ['cep']?>">

    <div class="edit"><p><input type="submit" value="Editar"></p></div>

</form> 

















 
</div>
<?php
 include_once ("rp.php");
 ?>

 
</body>
</html>

