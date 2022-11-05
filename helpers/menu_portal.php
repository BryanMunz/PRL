<?php
function configurar_menu($folder = '', $pagina = '')
{
    $menu = array();
    $menu_item  = array();
    $sub_menu_item = array();

    //Opcion Inicio
    $menu_item['is_active'] = ($pagina == "index") ? TRUE : FALSE;
    $menu_item['href'] = ($folder != '') ? '../../index.php' : './index.php';
    $menu_item['text'] = 'Inicio';
    $menu_item['submenu'] = array();
    $menu['inicio'] = $menu_item;

    //Opcion Generos
    $menu_item['is_active'] = ($pagina == "genero") ? TRUE : FALSE;
    $menu_item['href'] = '#';
    $menu_item['text'] = 'Géneros';
    $menu_item['submenu'] = array();
    //Submenu
    $sub_menu_item = array();
    $sub_menu_item['is_active'] = FALSE;
    $sub_menu_item['href'] = ($folder != '') ? './Accion.php' : './portal/pages/Accion.php';
    $sub_menu_item['text'] = 'Acción';
    $menu_item['submenu']['Accion'] = $sub_menu_item;
    //
    $sub_menu_item = array();
    $sub_menu_item['is_active'] = FALSE;
    $sub_menu_item['href'] = ($folder != '') ? './educativo.php' : './portal/pages/educativo.php';
    $sub_menu_item['text'] = 'educativo';
    $menu_item['submenu']['educativo'] = $sub_menu_item;
    $menu['generos'] = $menu_item;
    //
    $sub_menu_item = array();
    $sub_menu_item['is_active'] = FALSE;
    $sub_menu_item['href'] = ($folder != '') ? './otros_generos.php' : './portal/pages/otros_generos.php';
    $sub_menu_item['text'] = 'Otros Generos';
    $menu_item['submenu']['Otros Generos'] = $sub_menu_item;
    $menu['generos'] = $menu_item;
    return $menu;
} //end configurar_menu



function crear_menu_portal($folder = '', $pagina = '')
{
    $menu = configurar_menu($folder, $pagina);
    $html = '';
    $html .= '<ul>';
    foreach ($menu as $item) {
        if ($item['href'] != '#') {
            $html .= '<li class="' . ($item["is_active"] ? 'active' : '') . '"><a href="' . $item["href"] . '">' . $item["text"] . '</a></li>';
        } else {
            $html .= '<li class="' . ($item["is_active"] ? 'active' : '') . '"><a href="#">' . $item["text"] . ' <span class="arrow_carrot-down"></span></a>
                    <ul class="dropdown">';
            if (sizeof($item['submenu']) > 0) {
                foreach ($item['submenu'] as $item_sub_menu) {
                    $html .= '<li><a href="' . $item_sub_menu["href"] . '">' . $item_sub_menu["text"] . '</a></li>';
                }
            }

            $html .= '</ul></li>';
        }
    }
    $html .= '</ul>';
    return $html;
}//end crear_menu_portal
