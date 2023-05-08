<?php

namespace Project\Controllers;

use Project\Services\Db;
use Project\View\View;

class HistoryController 
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
}
