<?php
 
 include_once ("hoje.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Document</title>
</head>
<body>

<h1>Cadastro</h1> 
<div class="principal">

<form action="tabela.php" method="get">
    <div class="nome"><p>Nome Completo: <br> <input id="nome" type="text" name="nome" value="<?php echo$_GET ['nome'];?>" > </div> 
     <div class="l1">
     <div class="rg"> <p>RG: <br> <input type="text" name="rg" value="<?php echo$_GET ['rg'];?>"></p></div>
     <div class="orgao"><p>Orgão de expedição: <br> <select id="org" name="orgao" id="orgao"></p> 
<option value="Selecione!">Selecione!</option>
  <option value="sac">SAC</option>
    <option value="detran">Detran</option>
    <option value="ssp">SSP</option>  
</select></div>
     <div class="cpf"> <p>CPF: <br> <input type="text" name="CPF" value="<?php echo$_GET ['CPF'];?>"></p></div>
     </div> 
    <div class="l2">
    <div class="tel"><p>Telefone de Contato:<br> <input type="tel" name="tel" value="<?php echo$_GET ['tel'];?>"/> </p></div>
  <div class="email"><p>Email:<br> <input id="email" type="email" name="email" value="<?php echo$_GET ['email'];?>"/> </p></div>
    </div>
     <div class="l3">
        <div class="curso"><p>Curso:  <br> <select id="curso"name="curso" id="curso" ></p>
<option value="Selecione!">Selecione!</option>
  <option value="medicina">Medicina</option>
    <option value="direito">Direito</option>
    <option value="letras"> Letras</option>  

</select></div>
<div class="matricula"> <p>Número de Matricula: <br> <input type="text" name="matricula" value="<?php echo$_GET ['matricula'];?>"></p></div>
</div>
<div class="l4">
<div class="endereco"> <p>Endereço: <br> <input id="end" type="text" name="endereco" value="<?php echo$_GET ['endereco'];?>"></p></div>
<div class="complemento"> <p>Número: <br> <input type="text" name="numero"  value="<?php echo$_GET ['numero'];?>"></p></div>
</div>
<div class="l5">
<div class="bairro"> <p>Bairro: <br> <input type="text" name="bairro" value="<?php echo$_GET ['bairro'];?>"></p></div>
<div class="municipio"> <p>Município: <br> <input type="text" name="municipio" value="<?php echo$_GET ['municipio'];?>"></p></div>
<div class="cep"> <p>CEP: <br> <input type="text" name="cep" value="<?php echo$_GET ['cep'];?>"></p></div>
</div>
<div class="b"><p> <input id="b" type="submit" value="Salvar"/></p></div> 

</form> 
</div>
</div>  
<?php
 include_once ("rp.php");
 ?>
</body>
</html>