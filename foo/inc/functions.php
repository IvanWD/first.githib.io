<?php

/**
 * @param $menu
 * @param bool $vertical
 */
function menu($menu, $vertical=false)
{
    $ulClass = ' class="nav nav-pills pull-right"';
    $liClass = '';

    if($vertical){
        $ulClass = ' class="list-group"';
        $liClass = ' class="list-group-item"';
    }
    echo "<ul$ulClass>";
    foreach ($menu as $item) {
        echo "<li{$liClass} role=\"presentation\"><a href=\"{$item['href']}\">{$item['label']}</a></li>";
    }
    echo "</ul>";
}

/**
 * Рисует таблицу умножения
 * 
 * @param $rows
 * @param $cols
 * @param $color
 */
function table($rows, $cols, $color)
{
    echo "<table class='table table-bordered'>";
    for($tr = 1; $tr <= $rows; $tr++){
        echo "<tr>";
        for($td = 1; $td <= $cols; $td++){
            if($tr == 1 || $td == 1){
                echo "<td style='background-color: $color'>".$tr * $td."</td>";
            }else{
                echo "<td>".$tr * $td."</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}

function ifShowSlider($page)
{
    $showSlider = [
        'index'
    ];
    
    return in_array($page, $showSlider);
}

function getData($key, $default=null)
{
    return isset($_REQUEST[$key]) ? $_REQUEST[$key] : $default;
}

/**
 * @return string
 */
function getCookie($key, $default=null)
{
    return isset($_COOKIE[$key]) ? $_COOKIE[$key] : $default;
}