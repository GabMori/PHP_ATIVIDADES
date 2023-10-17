<!-- ATIVIDADE 1-->
<!-- Criar um programa que execute a soma de três valores.
Se a primeira variável for maior que 10, escrever o resultado da operação em azul
Se a segunda variável for menor que a terceira, escrever o resultado em verde
Se a terceira variável for menor que a primeira e a segunda variável escrever o resultado em vermelho -->
<?php

    if (isset($_POST['iVal1']) and isset($_POST['iVal2']) and isset($_POST['iVal3']) ) {
        $iVal1 = $_POST['iVal1']; 
        $iVal2 = $_POST['iVal2'];
        $iVal3 = $_POST['iVal3'];
    }else{
        $iVal1 = 0;
        $iVal2 = 0;
        $iVal3 = 0;
    }
    $iRes;
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - 1</title>
</head>
<style>
#blue {
    color:blue;
}
#green {
    color:green;
}
#red {
    color:red;
}
</style>
<body>
    <form method="post">
        <p>Primeiro valor</p>
        <input type="text" name="iVal1" id="iVal1">
        </br><p>Segundo valor</p>
        <input type="text" name="iVal2" id="iVal2">
        </br><p>Terceiro valor</p>
        <input type="text" name="iVal3" id="iVal3"></br>
        <input type="submit" name="acao">
    </form>
</body>
</html>
<?php
    $iRes = $iVal1 + $iVal2 + $iVal3;
    if ($iVal1 > 10) {
        echo "<p id='blue'> O resultado é: $iRes</p>";
    }
    if ($iVal2 < $iVal3) {
        echo "<p id='green'> O resultado é: $iRes</p>";
    }
    if ($iVal3 < $iVal2 and $iVal3 < $iVal1) {
        echo "<p id='red'> O resultado é: $iRes</p>";
    }
?>
<!-- ATIVIDADE 2-->


<html>
<hr>
</html>

<!-- Crie um programa para testar é um número é divisível por 2.
Caso for verdade escrever a frase “Valor divisível por 2”
Caso for falso escrever a frase “O valor não é divisível por 2” -->
<?php
    if (isset($_POST['valor'])) {
        $iVal = $_POST['valor']; 
    }else{
        $iVal = null;
    }
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - 2</title>
</head>
<body>
    <form method="POST">
        <p>Informe um valor</p>
        <input type="text" name="valor"></br>
        <input type="submit" name="acao">
    </form>
</body>
</html>
<?php
        if($iVal % 2 == 0) {
            echo "Valor divisível por 2";
        }else{
            echo "Valor não é divisível por 2";
        }
?>

<!-- ATIVIDADE 3 -->

<html>
<hr>
</html>

<!-- Crie um programa que calcule a área de um quadrado. 
Você deve configurar uma variável que representa o comprimento dos lados de um quadrado em metros. 
Após o cálculo escrever uma frase com o resultado da operação, exemplo: 
“A área do quadrado de lado 3 metros é 9 metros quadrados” -->
<?php
    if (isset($_POST['lado'])) {
        $rLado = $_POST['lado'];
    }else{
        $rLado = null;
    }
    $rArea;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <p>Tamanho do lado</p>
        <input type="text" name="lado"></br>
        <input type="submit" name="acao">
    </form>
</body>
</html>
<?php
  $rArea = $rLado * $rLado;

  if($rArea > 0){
    echo "A área do quadrado de lado $rLado metros é $rArea metros quadrados";
  }
?>

<!-- ATIVIDADE 4 -->

<html>
<hr>
</html>

<!-- Crie um programa que calcule a área de um retângulo. 
Você deve configurar duas variáveis que representam os lados a e b desse quadrado em metros. 
Após o cálculo escrever uma frase com o resultado da operação, exemplo: 
“A área do retângulo de lados 3 e 2 metros é 6 metros quadrados.” 
Caso a área for maior que 10 escreva a frase usando a tag h1, se não, escrever com h3. -->
<?php
    if (isset($_POST['ladoa']) and $_POST['ladob']){
        $rLadoa = $_POST['ladoa'];
        $rLadob = $_POST['ladob'];
    }else{
        $rLadoa = 0;
        $rLadob = 0;
    }
       
    $rArea;
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - 4</title>
</head>
<body>
<form method="POST">
        <p>Lado A</p>
        <input type="text" name="ladoa"></br>
        <p>Lado B</p>
        <input type="text" name="ladob"></br>
        <input type="submit" name="acao">
    </form>
</body>
</html>

<?php
    $rArea = $rLadoa * $rLadob;

    if ($rArea > 10) {
        echo"<h1>A área do retângulo de lados $rLadoa e $rLadob metros é $rArea metros quadrados.</h1>";
    }else {
        echo"<h3>A área do retângulo de lados $rLadoa e $rLadob metros é $rArea metros quadrados.</h3>";
    }
?>

<!-- ATIVIDADE 5 -->

<html>
<hr>
</html>

<!-- Crie um programa que calcule a área de um triângulo retângulo, cuja fórmula segue abaixo. 
Crie as variáveis apropriadas para o cálculo em PHP e por fim exiba uma frase com o valor da operação.
Fórmula -> Resultado = (Base * Altura) / 2 -->

<?php

    if (isset($_POST['base']) and isset($_POST['altura'])){
        $rBase = $_POST['base'];
        $rAltura = $_POST['altura'];
    }else{
        $rBase = 0;
        $rAltura = 0;
    }
    $rArea;
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - 5</title>
</head>
<body>
<form method="POST">
        <p>Base</p>
        <input type="text" name="base"></br>
        <p>Altura</p>
        <input type="text" name="altura"></br>
        <input type="submit" name="acao">
    </form>
</body>
</html>
<?php
    $rArea = ($rBase * $rAltura) / 2;
    echo "A área do triângulo é de: $rArea";
?>

<!-- ATIVIDADE 6 -->

<html>
<hr>
</html>

<!-- Crie um programa que calcule o valor gasto com cada produto comprado, 
sendo o resultado do valor individual do produto em Kg multiplicado pela quantidade em Kg comprada por Joãozinho.
Ao final escrever uma frase com o valor da compra, para um previsão se o dinheiro será o suficiente 
para pagar a conta, caso falte dinheiro escrever uma frase em vermelho com o valor que ficou acima do disponível 
por Joãozinho, e não, escrever uma fase em azul e o valor que Joãozinho ainda poderia gastar. 
Caso o valor da compra seja exatamente igual ao R$ 50,00 disponível, escreva uma frase em verde afirmando 
que o saldo para compras foi esgotado. -->
<?php
 
    if (isset($_POST['maca']) and isset($_POST['mela']) and isset($_POST['lara']) and isset($_POST['repo']) and isset($_POST['ceno']) and isset($_POST['bata'])) {
        $rMaca = $_POST['maca'];
        $rMela = $_POST['mela'];
        $rLara = $_POST['lara'];
        $rRepo = $_POST['repo'];
        $rCeno = $_POST['ceno'];
        $rBata = $_POST['bata'];
    }else{
        $rMaca = 0;
        $rMela = 0;
        $rLara = 0;
        $rRepo = 0;
        $rCeno = 0;
        $rBata = 0;
    }
 $rCompra;
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - 6</title>
</head>
<style>
#tem{
    color: blue;
}
#ntem{
    color: red;
}
#exa{
    color: green;
}
</style>
<body>
    <form method="POST">
        <p>Maçã</p>
        <input type="text" name="maca"></br>
        <p>Melancia</p>
        <input type="text" name="mela"></br>
        <p>Laranja</p>
        <input type="text" name="lara"></br>
        <p>Repolho</p>
        <input type="text" name="repo"></br>
        <p>Cenoura</p>
        <input type="text" name="ceno"></br>
        <p>Batatinha</p>
        <input type="text" name="bata"></br>
        <input type="submit" name="acao">
    </form>
</body>
<?php
     $rCompra = ($rMaca * 8)+($rMela * 10)+($rLara * 5)+($rRepo * 12.99)+($rCeno * 3.50)+($rBata * 9);
     $rResto = 50 - $rCompra;
     if ($rCompra > 50) {
        echo "<p id='ntem'>Valor final da compra : R$ $rCompra, não tem dinheiro o suficiente</p>";       
     }elseif ($rCompra < 50) {
        echo "<p id='tem'>Valor final da compra : R$ $rCompra, tem dinheiro o suficiente, restou $rResto</p>";
     }elseif ($rCompra == 50) {
        echo "<p id='exa'>Valor final da compra : R$ $rCompra, valor exato para a compra</p>";
     }
?>

<!-- ATIVIDADE 7 -->

<html>
<hr>
</html>

<?php
 $rCompra;
 $rJuro;
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - 7</title>
</head>
<body>
    
</body>
</html>
<?php
    $rCompra = (60 * 489.65);
    $rJuro = $rCompra - 22500;

    echo "Valor a vista: R$ 22.500 </br>";
    echo "Valor total parcelado: R$ $rCompra </br>";
    echo "Valor só dos juros: R$ $rJuro"
?>

<!-- ATIVIDADE 8 -->

<html>
<hr>
</html>

<?php
   $rCompra;
   $rJuro;
  ?>

  <!DOCTYPE html>
  <html lang="PT-BR">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Atividade - 7</title>
  </head>
  <body>
      
  </body>
  </html>
  <?php

    function CalculaJuros($rP, $iParcela){
        $rJuros = ((8654 * $rP) / 100) * $iParcela;
        $rTotal = (8654 + $rJuros);
        $rPars = ($rTotal / $iParcela);       
        return(round($rPars, 2));
    }
  
    echo "Para 24x o valor é de:".CalculaJuros(1.5, 24)."<br>";
    echo "Para 36x o valor é de:".CalculaJuros(2, 36)."<br>";
    echo "Para 48x o valor é de:".CalculaJuros(2.5, 48)."<br>";
    echo "Para 60x o valor é de:".CalculaJuros(3, 60)."<br>";
  ?>

<!-- ATIVIDADE 9 -->

<?php
   $rCompra;
   $rJuro;
  ?>

  <!DOCTYPE html>
  <html lang="PT-BR">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Atividade - 7</title>
  </head>
  <body>
     <hr> 
  </body>
  </html>
  <?php

    function CalculaJurosComposto($rP, $iParcela){
        $rJuros = 8654 * pow((1 + ($rP/100)), $iParcela);
        $rPars = ($rJuros / $iParcela);       
        return(round($rPars, 2));
    }
  
    echo "Para 24x o valor é de:".CalculaJurosComposto(2, 24)."<br>";
    echo "Para 36x o valor é de:".CalculaJurosComposto(2.3, 36)."<br>";
    echo "Para 48x o valor é de:".CalculaJurosComposto(2.6, 48)."<br>";
    echo "Para 60x o valor é de:".CalculaJurosComposto(2.9, 60)."<br>";
  ?>
