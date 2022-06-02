
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