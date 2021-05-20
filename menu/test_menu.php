<?php

$arr = array(
    array(
        'id'=>1,
        'title'=>'mazda',
        'parent_id'=>0,
    ),
    array(
        'id'=>2,
        'title'=>'opel',
        'parent_id'=>0,
    ),
    array(
        'id'=>3,
        'title'=>'black',
        'parent_id'=>2,
    ),
    array(
        'id'=>4,
        'title'=>'sedan',
        'parent_id'=>3,
    ),
    array(
        'id'=>5,
        'title'=>'white',
        'parent_id'=>4,
    ),
    array(
        'id'=>6,
        'title'=>'Lada',
        'parent_id'=>0,
    ),
    array(
        'id'=>7,
        'title'=>'cupe',
        'parent_id'=>3,
    ),
);
var_dump($arr);

function generateElemTree(&$treeElem,$parents_arr) {
    foreach($treeElem as $key=>$item) {
        var_dump($key,$item);
        if(!isset($item['children'])) {
            $treeElem[$key]['children'] = array();

        }
        if(array_key_exists($key,$parents_arr)) {
            $treeElem[$key]['children'] = $parents_arr[$key];
            generateElemTree($treeElem[$key]['children'],$parents_arr);
        }
    }
}

function createTree($arr) {
    $parents_arr = array();
    foreach($arr as $item) {
        var_dump($item);
        $parents_arr[$item['parent_id']][$item['id']] = $item;
        }
    var_dump($parents_arr);
    $tree_elem = $parents_arr[0];
    echo '<pre>';
    print_r($tree_elem);
    echo '</pre>';
    var_dump($tree_elem);
    generateElemTree($tree_elem,$parents_arr);
    return $tree_elem;
}

$new_arr = createTree($arr);

echo '<pre>';
print_r($new_arr);
echo '</pre>';