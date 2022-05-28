<form action="" method = "">
    <input name="nome" placeholder="Nome"><br/>

    <input name="cidade" placeholder="Cidade"><br/>

    <button>Enviar</button>

</form>
<hr>
<h2>Calculadora</h2>
<form action="" method = "post">
    <input name="numero1" placeholder="Número 1"><br/><br/>

    <input name="numero2" placeholder="Número 2"><br/>

    <button name="somar">Somar</button>
    <button name="subtrair">Subtrair</button>
    <button name="multiplicar">Multiplicar</button>
    <button name="dividir">Dividir</button>

</form>

<?php
    if($_POST){//se existir alguma informação em post
        if (isset($_POST["somar"])){
            echo "Resultado" .$_POST['numero1']+$_POST['numero2'];
        }
        if (isset($_POST["subtrair"])){
            echo "Resultado" .$_POST['numero1']-$_POST['numero2'];
        }
        if (isset($_POST["multiplicar"])){
            echo "Resultado" .$_POST['numero1']*$_POST['numero2'];
        }

        if (isset($_POST["dividir"])){
            echo "Resultado" .$_POST['numero1']/$_POST['numero2'];
        }
    }
?>