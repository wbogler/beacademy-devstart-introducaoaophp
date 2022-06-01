<select name="" id="">
    <option selected>Ano</option>
    <?php
        $anos = 2022;
        for ($anos; $anos >= 1950; $anos--){
            echo "<option> {$anos} </option>";
        }
    ?>
</select>
<select name="" id="">
        <option selected>Mês</option>
        <?php
            $mes = 1;
            while ($mes<=12){
                echo "<option>{$mes}</option>";
                $mes++;
            }
        ?>
</select>
<select name="" id="">
    <option selected>Dia</option>
    <?php
       $dia = 1;

       for($dia; $dia<=30; $dia++){
           echo"<option>{$dia}</option>";
       }

    ?>
</select>