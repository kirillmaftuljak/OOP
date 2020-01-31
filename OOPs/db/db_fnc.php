<?php
// ühenduse loomine
function connect($host, $user, $pass, $dbname){
    $link = mysqli_connect($host, $user, $pass, $dbname);
    if($link === false){
        echo 'Probleem andmebaasi ühendusega<br>';
        exit;
    }
    mysqli_set_charset($link, 'utf8');

    return $link;
}

// suvalise päringu saatmine andmebaasi
function query($sql, $link){
    $result = mysqli_query($link, $sql);
    if($result === false){
        echo 'Probleem päringuga <b>'.$sql.'</b><br>';
        return false;
    }
    return $result;
}

function getData($sql, $link){
    $result = query($sql, $link);
    $data = array();
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $data[] = $row;
    }

    if(count($data) == 0){
        return false;
    }
    return $data;
}