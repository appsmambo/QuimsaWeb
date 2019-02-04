<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
    }
    public function getHome()
    {
        return view('home');
    }
    public function getContacto()
    {
        return view('contactanos');
    }
    public function getMaquinarias()
    {
        return view('productos.maquinarias');
    }
    public function getMaquinariasMarca($marca, $producto = '')
    {
        $url = 'productos.maquinarias/' . $marca . ($producto != '' ? '/' . $producto : '');
        return view($url);
    }
}
