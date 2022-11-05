<?php

//Constante para tomar la carpeta de recursos del portal
$root_path_portal = './portal/Resources/';
$root_specific_portal = '../Resources/';

//Constante para tomar la carpeta de usuario
$root_specific_user = './Resources/';


function path_image($folder = '', $img = '')
{
    //$identificador = (condition) ? 'has esto - action a' : 'si no action b' ;
    $path = ($folder != "") ? '../img/' . $img : './portal/img/' . $img;
    return (file_exists($path) ? $path : ($folder != "" ? '../img/no-image-.png' : './portal/img/no-image-.png'));
}//end path_image
