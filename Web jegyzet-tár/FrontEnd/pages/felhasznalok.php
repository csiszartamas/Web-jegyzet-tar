<h2>Felhasznalók</h2>
<table>
    <tr>
        <th>Felhasznaló</th>
        <th>Email-cím</th>
        <th>Jegyzet</th>
    </tr>
    <?php
    $felh = Felhasznalok();
    for ($i=0; $i < count($felh); $i++) { 
        echo "<tr>
            <td>".$felh[$i]["nev"]."</td>
            <td>".$felh[$i]["email"]."</td>
            <td><a href='./?p=detail&id=".$felh[$i]["id"]."'><img src='./FrontEnd/img/jegyzet.png' alt='jegyzet.png'></a></td>
        </tr>";
    }
    ?>
</table>