<?php

namespace core;

class MysqlQuery
{

    private $select;

    public function select($table, $fields = '*')
    {
        $this->select = "SELECT {$fields} FROM {$table}";

        return $this;
    }

    public function where($chave, $valor)
    {
        $this->bind[] = $chave;
        $this->bindValues[] = $valor;

        return $this;
    }

    public function executar()
    {
        $conexao = Database::getInstance();

        $query = $this->select;
        $binds = implode('=?,', $this->bind);
        $query .= " WHERE {$binds}";
        $select = $conexao->prepare($query);
        $select->execute($this->bindValues);
        return $select->fetchAll();
    }
}