<?php
// src/Controller/ArticlesController.php

namespace App\Controller;

class ProductsController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');
        $products = $this->Paginator->paginate($this->Products->find());
        
        $this->set(compact('products'));
    }
}