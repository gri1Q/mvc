<?php

namespace Project\Controllers;

use Project\Services\Db;
use Project\View\View;
use tidy;

class MainController
{
    private $view;
    private $db;
    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
        $this->db = new Db;
    }
    public function main()
    {
        $query = 'Select * from categories';
        $result = $this->db->query($query,);
        echo "<pre>";
        // var_dump($result);
        // Тут нужно будет добавить перечень всех товаров, кроме медикаментов, и статус удаленные
        // $this->view->renderHtml('main/main.php', ['articles' => $articles]);
    }


}
