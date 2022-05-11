<?php

function Felhasznalok()
{
    $sql = "SELECT f_nev,f_email,f_id FROM j_felhasznalok ORDER BY f_nev ASC;";
    $result=connect()->query($sql);
    if($result->num_rows >0) {
        $n = 0;
        while ($row = $result->fetch_assoc()) 
        {
            $list[$n]["nev"] = $row["f_nev"];
            $list[$n]["email"] = $row["f_email"];
            $list[$n]["id"] = $row["f_id"];
            $n++;
        }
    }
    else {
        $list = null;
    }
    connect()->close();
    return $list;
}

function Nev($id)
{
    $sql = "SELECT f_nev FROM j_felhasznalok WHERE f_id = $id";
    $result=connect()->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $info = $row["f_nev"];
    }
    else {
        $info = null;
    }

    connect()->close();
    return $info;
}

function Jegyzet($id)
{
    $sql = "SELECT j_datum,j_tema,j_tartalom FROM j_jegyzet WHERE f_id = $id;";
    $result=connect()->query($sql);
    if($result->num_rows >0) {
        $n = 0;
        while ($row = $result->fetch_assoc()) 
        {
            $list[$n]["datum"] = $row["j_datum"];
            $list[$n]["tema"] = $row["j_tema"];
            $list[$n]["tartalom"] = $row["j_tartalom"];
            $n++;
        }
    }
    else {
        $list = null;
    }
    connect()->close();
    return $list;
}

function Jegyzetek()
{
    $sql = 
    "SELECT j_datum,j_tema,f_nev,j_id
    FROM j_jegyzet
    INNER JOIN j_felhasznalok ON j_jegyzet.f_id = j_felhasznalok.f_id
    ORDER BY j_datum ASC;";
    $result=connect()->query($sql);
    if($result->num_rows >0) {
        $n = 0;
        while ($row = $result->fetch_assoc()) 
        {
            $list[$n]["datum"] = $row["j_datum"];
            $list[$n]["tema"] = $row["j_tema"];
            $list[$n]["nev"] = $row["f_nev"];
            $list[$n]["id"] = $row["j_id"];
            $n++;
        }
    }
    else {
        $list = null;
    }
    connect()->close();
    return $list;
}

function Detail($id)
{
    $sql = 
    "SELECT j_datum,j_tema,j_tartalom,f_nev 
    FROM j_jegyzet
    INNER JOIN j_felhasznalok ON j_jegyzet.f_id = j_felhasznalok.f_id 
    WHERE j_id = $id";
    $result=connect()->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $info["datum"] = $row["j_datum"];
        $info["tema"] = $row["j_tema"];
        $info["tartalom"] = $row["j_tartalom"];
        $info["nev"] = $row["f_nev"];
    }
    else {
        $info = null;
    }

    connect()->close();
    return $info;
}

function Kereses($szo)
{
    $sql = 
    "SELECT j_datum,j_tema,f_nev,j_tartalom
    FROM j_jegyzet
    INNER JOIN j_felhasznalok ON j_jegyzet.f_id = j_felhasznalok.f_id
    WHERE j_tema LIKE '%$szo%'
    OR j_tartalom LIKE '%$szo%';";
    $result=connect()->query($sql);
    if($result->num_rows >0) {
        $n = 0;
        while ($row = $result->fetch_assoc()) 
        {
            $list[$n]["datum"] = $row["j_datum"];
            $list[$n]["tema"] = $row["j_tema"];
            $list[$n]["nev"] = $row["f_nev"];
            $list[$n]["tartalom"] = $row["j_tartalom"];
            $n++;
        }
    }
    else {
        $list = null;
    }
    connect()->close();
    return $list;
}

?>