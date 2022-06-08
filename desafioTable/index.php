
<table>
    <tr>
        <td>Banda</td>
        <td>Música</td>
        <td>Música</td>
    </tr>
    <?php
        $bandas = ["Slipknot", "Iron Maiden", "Muse"];
        $musica = ["Psicosocial", "Before i Forget","The Trooper", "Fear of the Dark","Plug in Baby", "Hysteria"];
        $iron = [];
        $muse = [];
        $controller = 0;
        $controller1 = 0;
        $controller2 = 1;
        do{
            foreach ($bandas as $banda){
                echo "<tr><td>{$banda}</td><td>{$musica[$controller1]}</td><td>{$musica[$controller2]}</td></tr>";
                $controller1+=2;$controller2+=2;$controller++;
            }
                
        }while($controller<3);
    ?>
</table>

<hr>
<h2>Matrizes</h2>
<br>
<table>
    <tr>
        <td>Banda</td>
        <td>Música</td>
        <td>Tempo</td>
    </tr>

    <?php
        $bands = [["Slipknot", "Before i Forget", 5],["Iron Maiden", "Fear of the Dark", 7],["Muse", "Plug in Baby", 5]];
        for ($i = 0; $i<3; $i++){
            echo "<tr><td>{$bands[$i][0]}</td><td>{$bands[$i][1]}</td><td>{$bands[$i][2]}</td></tr>";
        }
    ?>
</table>
<hr>
<h2>Matrizes associativas</h2>
<br>

<?php
    $dados = [
        'nome' => 'Gustaf',
        'idade' => 20,
        'telefone' => '88 8855 9966',
    ];

    echo "Nome: ". $dados['nome'] . "<br>";
    echo "Idade: ". $dados['idade'] . "<br>";
    echo "Telefone: ". $dados['telefone'] . "<br>";

    echo "<br><br>";

    $aluno = [
        'nome' => 'Magnus',
        'email' => 'magnus@bol.com',
        'notas' => [
            'Port'=> 1,
            'Math'=>3,
        ]
    ];
    echo "Nome: ". $aluno['nome'] . "<br>";
    echo "Email: ". $aluno['email'] . "<br>";
    echo "Notas: ". $aluno['notas'] . "<br>";
        
?>