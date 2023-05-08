<?php

namespace Project\Controllers;

use Project\Exception\InvalidArgumentException;
use Project\Models\Categories\Category;
use Project\Services\Db;
use Project\View\View;

class CategoriesController
{
    private $view;
    private $db;
    public function __construct()
    {
        # Тут поменять адрес вью
        $this->view = new View(__DIR__ . '/../../../templates');
        # 

        $this->db = new Db;
    }

    public function addCategory(array $data)
    {
        if (!empty($_POST)) {
            try {

                $category = Category::creatCategory($_POST);
            } catch (InvalidArgumentException $e) {
                $this->view->renderHtml('/', ['error' => $e->getMessage()]);
                return;
            }
            header('Location: /articles/' . $category->getId(), true, 302);
            exit();
        }
    }
}
