<?php

if (!isset($_GET['page'])){
    include ('home.html');
}
else{
    $side = $_GET['page'];
    switch ($side){
        case 'home':
            include ('home.html');
            break;
        case 'products':
            include ('products.html');
            break;
        case 'aboutus':
            include('aboutus.html');
            break;
        default:
            include ('home.html');
    }

}