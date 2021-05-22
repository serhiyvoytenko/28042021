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
//var_dump($arr);

function generateElemTree(&$treeElem,$parents_arr) {
    foreach($treeElem as $key=>$item) {
        if(!isset($item['children'])) {
            $treeElem[$key]['children'] = array();

        }
//        echo '<pre>';
//        print_r($treeElem);
//        print_r($parents_arr);
//        echo '</pre>';
        if(array_key_exists($key,$parents_arr)) {
            $treeElem[$key]['children'] = $parents_arr[$key];
            var_dump($treeElem[$key]['children']);
            generateElemTree($treeElem[$key]['children'],$parents_arr);
        }
    }
}

function createTree($arr) {
    $parents_arr = array();
    foreach($arr as $item) {
        $parents_arr[$item['parent_id']][$item['id']] = $item;
        }
    $tree_elem = $parents_arr[0];
    var_dump($parents_arr);
    generateElemTree($tree_elem,$parents_arr);
    return $tree_elem;
}

$new_arr = createTree($arr);

echo '<pre>';
print_r($new_arr);
echo '</pre>';