<?php
function path_img($folder = '', $img = '')
{

    $path = ($folder != "") ? '../img' . $img : './portal/img' . $img;
    return (file_exists($path) ? $path : ($folder != "" ? '../img/no-image-.png' : './portal/img/no-image-.png'));
}
