<h2>Jegyzetek</h2>
<table>
    <tr>
        <th>Dátum</th>
        <th>Téma</th>
        <th>Felvitte</th>
        <th></th>
    </tr>
    <?php
    $jegyzetek = Jegyzetek();
    for ($i=0; $i < count($jegyzetek); $i++) { 
        echo "<tr>
            <td>".$jegyzetek[$i]["datum"]."</td>
            <td>".$jegyzetek[$i]["tema"]."</td>
            <td>".$jegyzetek[$i]["nev"]."</td>
            <td><a href='./?p=jegyzet&id=".$jegyzetek[$i]["id"]."'><img src='./Frontend/img/details.png' alt='details.png'></a></td>
        </tr>";
    }
    ?>
</table>
