<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class CatalogController extends Controller
{
public function Catalog(){
    return "Estoy dentro de CatalogController ";
}
public function CatalogShow(){
    return "Estoy dentro de CatalogShowController ";
}
public function CatalogCreate(){
    return "Estoy dentro de CatalogCreateController ";
}
public function CatalogEdit(){
    return "Estoy dentro de CatalogEditController ";
}
}