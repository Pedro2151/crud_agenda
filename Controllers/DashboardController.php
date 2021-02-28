<?php namespace Controllers;

use Lib\Banco;

class DashboardController {
    public function index ()
    {
        list($contatos) = Banco::queryFetch('SELECT count(id) FROM contato', [], \PDO::FETCH_NUM);

        return include PATH.'views/index.php';
    }
}