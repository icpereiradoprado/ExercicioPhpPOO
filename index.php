<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício PHP POO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">

        <form action="" method="post">
            <label for="">Nome: </label><br>
            <input type="text" id="nome" name="nome" value=""><br>
            <label for="">Cidade: </label><br>
            <input type="text" id="cidade" name="cidade" value=""><br>
            <label for="">Salário por Hora: </label><br>
            <input type="number" name="salHora" id="salHora" min="0" step=".01"><br>
            <label for="">Horas Trabalhadas: </label><br>
            <input type="number" name="horasTrab" id="horasTrab" min="0" step=".01"><br>
            <label for="">Aumento: </label><br>
            <input type="number" name="aumento" id="aumento" min="0" step=".01"><br><br>
            <div class="container">
                <input type="submit" class="btns" value="Cadastrar" name="btnCadastrar">
                <input type="submit" class="btns" value="Calcular Salário" name="btnCalcular">
                <input type="submit" class="btns" value="Mostrar Dados" name="btnMostrar">
                <input type="submit" class="btns" value="Aumento Salarial" name="btnAumentar">
            </div>
        </form>
        
    </div>
    
</body>
</html>


<?php 
    require_once "Funcionario.php";
    $funcionario = new Funcionario();
    
    if(isset($_POST["btnCadastrar"]))
    {
        $funcionario->setNome($_POST['nome']);
        $funcionario->setCidade($_POST['cidade']);
        $funcionario->setSalHora($_POST['salHora']);
        $funcionario->setHorasTrab($_POST['horasTrab']);
        $funcionario->setSalarioFinal($_POST['salario']);

        echo "<div class='container'><h3>Usuário Cadastrado com sucesso</h3><div>";
    }

    if(isset($_POST["btnCalcular"]))
    {
        $funcionario->setSalHora($_POST['salHora']);
        $funcionario->setHorasTrab($_POST['horasTrab']);
        $salario = $funcionario->calcularSalario();
        echo "<div class='container'><h3>Salário do Funcionário: <span id='salarioColor'>R$ $salario</span></h3></div>";
    }

    if(isset($_POST["btnMostrar"]))
    {
        $funcionario->setNome($_POST['nome']);
        $funcionario->setCidade($_POST['cidade']);
        $funcionario->setSalHora($_POST['salHora']);
        $funcionario->setHorasTrab($_POST['horasTrab']);
        $funcionario->setSalarioFinal($funcionario->calcularSalario());
        $dados = $funcionario->mostrarDados();
        echo "<div class='container'><h3>$dados<h3><div>";
    }

    if(isset($_POST["btnAumentar"]))
    {
        $funcionario->setSalHora($_POST['salHora']);
        $funcionario->setHorasTrab($_POST['horasTrab']);
        $funcionario->setSalarioFinal($funcionario->calcularSalario());
        $aumento = $funcionario->darAumento($_POST['aumento']);
        echo "<div class='container'><h3>Salário com aumento: <span id='salarioColor'>R$ $aumento</span><h3><div>";
    }

?>
