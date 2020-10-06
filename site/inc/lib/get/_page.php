<?php
//Initialisation tableau ar_page
$ar_page = array();
//Requete sur la table mcmp_page :
$req_page = $bdd->query('SELECT * FROM mcmp_page');
while ($data_page = $req_page->fetch()){
    $ar_page[$data_page['KeyFile']] = $data_page;
}
if (isset($_GET['page'])&& !empty($_GET['page'])){
    if(array_key_exists($_GET['page'], $ar_page)){
        $page = $_GET['page'];
    }
    else{
        $page = '404';
    }
}
//Recupération des variables PHP pour nav_dynamique.php
$title = $ar_page[$page]['MetaTitle'];
$metadescription = $ar_page[$page]['MetaDes'];
$keywords = $ar_page[$page]['Keywords'];
$h1 =  $ar_page[$page]['H1'];
$menuTitle = $ar_page[$page]['Menu'];