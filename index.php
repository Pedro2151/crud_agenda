<?php

include 'config.php';

$pageId = $_GET['pageid'] ?? 'index';
$id = intval($_GET['id'] ?? 0);
$action = ($_GET['action'] ?? 'nao') == 'sim';

$contatoController = new Controllers\ContatoController();

switch ($pageId) {
    case 'dashboard':
        $dashboardController = new Controllers\DashboardController();
        $dashboardController->index();
    break;
    case 'contatos':
        $contatoController->index();
    break;
    case 'contatos/cadastrar':
        if ($action) {
            $contatoController->cadastrarAction();    
        } else {
            $contatoController->cadastrar();
        }
    break;
    case 'contatos/editar':
        if ($action) {
            $contatoController->editarAction($id);    
        } else {
            $contatoController->editar($id);
        }
    break;
    case 'contatos/deletar':
        $contatoController->deletarAction($id);
    break;
}