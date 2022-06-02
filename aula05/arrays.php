<?php

    $alunos = array("aluno1", "aluno2", "aluno3"); //forma antiga

    $alunosNovo = ["aluno1", "aluno2", "aluno3"]; //forma nova

    echo $alunosNovo[0];

    for ($i = 0; $i<3; $i++){
        echo "<br>{$alunosNovo[$i]} ";
    }

    echo"<br><br>";
    
?>
    
    <ul>
        <?php
            $frutas = ["Laranja", "Melancia", "Maça", "Tangerina"];
            for ($j = 0; $j<=3;$j++){
                echo "<li>{$frutas[$j]}</li>";
            }
        ?>
    </ul>

    <ul>
        <?php
            $frutas = ["Laranja", "Melancia", "Maça", "Tangerina"];
            foreach($frutas as $fruta){
                echo "<li>{$fruta}</li>";
            }
        ?>
    </ul>
