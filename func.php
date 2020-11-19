<?php

function isset_list($data, $check_list){
    foreach($check_list as $l){
        if (!isset($data[$l]))
            return false;
    }
    return true;
}


// INSERT文生成
function create_insert_sql($table_name, $dict){
    $vars = 'INSERT INTO '. $table_name .' ('. implode(', ', array_keys($dict)) .')';
    $values_list = [];

    foreach(array_values($dict) as $value){
        if ($value == 'NULL' || preg_match("/^[0-9]+$/", $value))
            $values_list[] = $value;
        else
            $values_list[] .= '"'. $value. '" ';
    }
    $datas = ' VALUES ('. implode(', ', $values_list) . ')';

    return $vars . $datas;
}


// UPDATE文生成
function create_update_sql($table_name, $dict, $id){
    $vars = 'UPDATE '. $table_name .' SET ';
    $len = count($dict);
    $count = 1;

    foreach($dict as $key => $value){
        if ($value != 'NULL' && !preg_match("/^[0-9]+$/", $value))
            $value = '"'. $value. '" ';
        $vars .= $key .' = '. $value;

        if ($len > $count)
            $vars .= ', ';
        $count++;
    }

    return $vars . ' WHERE id = '. $id;
}

