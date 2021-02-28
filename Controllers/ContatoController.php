<?php namespace Controllers;

use Models\Contato;

class ContatoController {
    public function index ()
    {
        $contatos = Contato::findAll();
        return include PATH.'views/contatos/index.php';
    }

    public function cadastrar ()
    {
        return include PATH.'views/contatos/cadastrar.php';
    }

    public function cadastrarAction ()
    {
        try {
            $contato = new Contato();

            $contato->nome = $_POST['nome']??'';
            $contato->telefone = $_POST['telefone']??'';
            $contato->email = $_POST['email']??'';
            $contato->descricao = $_POST['descricao']??'';
            $contato->insert();

            $retorno =  header('Location: '.'/contatos');
        } catch (\Exception $e) {
            $retorno = ['id' => 0, 'status' => 0, 'message' => $e->getMessage()];
        }

        echo json_encode($retorno);
        exit;
    }

    public function editar ($id)
    {
        // Buscar dados do contato
        $contato = Contato::find($id);

        return include PATH.'views/contatos/editar.php';
    }

    public function editarAction ($id)
    {
        try {
            $contato = Contato::find($id);

            $contato->nome = $_POST['nome']??'';
            $contato->telefone = $_POST['telefone']??'';
            $contato->email = $_POST['email']??'';
            $contato->descricao = $_POST['descricao']??'';
            $contato->update();

            $retorno =  header('Location: '.'/contatos');
        } catch (\Exception $e) {
            $retorno = ['id' => 0, 'status' => 0, 'message' => $e->getMessage()];
        }

        echo json_encode($retorno);
        exit;
    }

    public function deletarAction ($id)
    {
        try {
            $contato = Contato::find($id);
            $contato->delete($id);

            $retorno = ['status' => 1, 'message' => "Deletado com sucesso"];
        } catch (\Exception $e) {
            $retorno = ['id' => 0, 'status' => 0, 'message' => $e->getMessage()];
        }

        echo json_encode($retorno);
        exit;
    }
}