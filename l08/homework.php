<?php

$data = [
    ['title' => 'TITLE', 'link' => '/link'],
    ['title' => 'TITLE2', 'link' => '/link2'],
    ['title' => 'PARENT 1', 'children' => [
        ['title' => 'CHILD', 'link' => '/child-link'],
        ['title' => 'CHILD2', 'link' => '/child-link2'],
    ]],
];
/*
 * Your PHP - code here
 */
$html = '<ul>';
foreach ($data as $value) {
    if (!array_key_exists('children', $value)) {
        $html .= "<li><a href='{$value['link']}'>{$value['title']}</a></li>";
    }else{
        $html .="<li>{$value['title']}<ul>";
        foreach ($value['children'] as $child){
            $html .= "<li><a href='{$child['link']}'>{$child['title']}</a></li>";
        }$html.="</ul></li>";
    }
}
$html .= '</ul>';
echo $html;
//$html = <<<HTML
//<ul>
//    <li><a href="/link">TITLE</a></li>
//    <li><a href="/link2">TITLE2</a></li>
//    <li>
//        PARENT 1
//        <ul>
//            <li><a href="/child-link">CHILD</a></li>
//            <li><a href="/child-link2">CHILD2</a></li>
//        </ul>
//    </li>
//</ul>
//HTML;
//
