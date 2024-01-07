<?php

class HomeController
{
    public function index()
    {
        $Cites = new cityDAO();
        include_once 'app/view/home.php';
    }
}