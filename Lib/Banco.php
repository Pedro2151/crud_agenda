<?php namespace Lib;

class Banco {
    static $ConPDO;
    /**
     * Pega instancia PDO
     * 
     *
     * @return \PDO;
     */
    public static function getConPDO ()
    {
        if(!is_null(self::$ConPDO)) {
            return self::$ConPDO;
        }
        
        try {
            $dsn = 'mysql:dbname='.DB_NAME.';host=' . DB_HOST;
            self::$ConPDO = new \PDO($dsn, DB_USER, DB_PASS, [
                \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'",
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]);
            return self::$ConPDO;
        } catch (\PDOException $e) {
            echo 'Connection('.$idConnection.') failed: ' . $e->getMessage();
            exit;
        }
    }

    public static function lastInsertId ()
    {
        return self::getConPDO()->lastInsertId();
    }

    /**
     * Execulta query usando PDO
     *
     * @param String $query Query sql
     * @param Array
     * @return \PDOStatement
     */
    public static function query ($query, $params = [])
    {
        $pdo = self::getConPDO();

        if (!empty($params)) {
            // Veja: https://www.php.net/manual/pt_BR/pdo.prepare.php
            $sth = $pdo->prepare($query);
            $sth->execute($params);
            return $sth;
        }
        return $pdo->query($query);
    }

    /**
     * Execulta query usando PDO e retorna primeiro resultado
     *
     * @param String $query Query sql
     * @return Mixed False se erro ou nao encontrar. Retorno de acordo com fetchStyle veja: https://www.php.net/manual/pt_BR/pdostatement.fetch.php
     */
    public static function queryFetch($query, $params = [], $fetchStyle = \PDO::FETCH_OBJ)
    {
        $result = self::query($query, $params);

        if (!$result || $result->rowCount() == 0) {
            return false;
        }

        // \PDO::FETCH_ASSOC
        

        // FETCH_NUM
        // $result[0]
        // $result[1]

        // FETCH_ASSOC
        // $result['nome']
        // $result['telefone']
        
        // FETCH_OBJ
        // $resulta->nome;
        // $resulta->telefone;

        return $result->fetch($fetchStyle);
    }

    /**
     * Execulta query usando PDO e retorna todos os resultados como array
     *
     * @param String $query Query sql
     * @return Mixed False se erro ou nao encontrar. Retorno de acordo com fetchStyle veja: https://www.php.net/manual/pt_BR/pdostatement.fetch.php
     */
    public static function queryFetchAll($query, $params = [], $fetchStyle = \PDO::FETCH_OBJ)
    {
        $result = self::query($query);

        if (!$result && $result->rowCount() == 0) {
            return array();
        }

        return $result->fetchAll($fetchStyle);
    }
}