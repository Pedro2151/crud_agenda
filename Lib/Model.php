<?php namespace Lib;

class Model {    
    private $table;
    private $primaryKey = 'id';
    private $dados = [];

    public function setTable ($table)
    {
        $this->table = $table;
    }

    public function setPrimaryKey ($campo)
    {
        $this->primaryKey = $campo;
    }

    public function setDados ($dados = [])
    {
        $this->dados = $dados;
    }

    public function getDados ()
    {
        return $this->dados;
    }

    public function getTable ()
    {
        return $this->table;
    }

    public function getPrimaryKey ()
    {
        return $this->primaryKey;
    }

    public function limpar ()
    {
        $this->dados = [];
    }

    public function __get ($nome)
    {
        if (isset($this->dados[$nome])) {
            return $this->dados[$nome];
        }

        throw new \Exception("Campo '".$nome."' não existe na tabela " . $this->table);
    }

    public function __set ($nome, $valor)
    {
        $this->dados[$nome] = $valor;
    }

    public static function find ($where, $params = [])
    {
        $model = new static();

        if (is_numeric($where)) {
            $params = [$where];
            $where = $model->getPrimaryKey() . ' = ?';
        }


        $sql = "SELECT * FROM " . $model->getTable() ." WHERE ". $where . ' LIMIT 1';
        $result = Banco::queryFetch($sql, $params, \PDO::FETCH_ASSOC);

        if (!$result) {
            throw new \Exception("Registro não encontrado");
        }

        $model->setDados($result);

        return $model;
    }

    public static function findAll ($where = null, $params = [])
    {
        $model = new static();

        if (is_null($where)) {
            $where = '1=1';
        } else {
            if (is_numeric($where)) {
                $params = [$where];
                $where = $model->getPrimaryKey() . ' = ?';
            }
        }


        $sql = "SELECT * FROM " . $model->getTable() ." WHERE ". $where;
        $result = Banco::queryFetchAll($sql, $params, \PDO::FETCH_ASSOC);

        $retorno = [];

        foreach ($result as $dados) {
            $m = new static();
            $m->setDados($dados);
            $retorno[] = $m;
        }

        return $retorno;

    }

    public function insert ()
    {
        if (empty($this->dados)) {
            return true;
        }

        $params = [];

        $campos = '';
        $valores = '';

        $sep = '';
        foreach ($this->dados as $nome => $valor) {
            if ($nome == $this->primaryKey) {
                continue;
            }

            $campos .= $sep . $nome;
            $valores .= $sep . '?';
            $params[] = $valor;
            $sep = ',';
        }

        $sql = "INSERT INTO ".$this->table . " (" . $campos . ") VALUES (" . $valores . ')';
        $result = Banco::query($sql, $params);

        if (!$result) {
            throw new \Exception("Erro ao salvar");
        }

        $novo = $this->find(Banco::lastInsertId());

        $this->setDados( $novo->getDados() );

        return $this;
    }

    public function update ($id = null)
    {
        if (is_null($id)) {
            $id = $this->dados[$this->primaryKey] ?? null;
        }

        if (is_null($id)) {
            return false;
        }

        if (empty($this->dados)) {
            return true;
        }

        $params = [];

        $valoresSet = '';

        $sep = '';
        foreach ($this->dados as $nome => $valor) {
            if ($nome == $this->primaryKey) {
                continue;
            }

            $valoresSet .= $sep . $nome . ' = ?';
            $params[] = $valor;
            $sep = ',';
        }

        $params[] = $id;

        $sql = "UPDATE ".$this->table . " SET " . $valoresSet . " WHERE " . $this->primaryKey . ' = ?';
        return Banco::query($sql, $params);
    }

    public function delete ($id = null)
    {
        if (is_null($id)) {
            $id = $this->dados[$this->primaryKey] ?? null;
        }

        if (is_null($id)) {
            return false;
        }

        $this->limpar();
        $sql = "DELETE FROM ".$this->table . " WHERE " . $this->primaryKey . ' = ?';
        return Banco::query($sql, [$id]);
    }
}

