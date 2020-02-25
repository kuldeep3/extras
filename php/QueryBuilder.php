<?php

class QueryBuilder
{
    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function addItem($table, $colName, $colValues)
    {
        $colValues = implode(',', $colValues);
        $colName = implode(',', $colName);
        $stmt = $this->pdo->prepare("INSERT INTO ${table} (${colName}) VALUES (${colValues})");
        $stmt->execute();
        $lastId = $this->pdo->lastInsertId();
        return $lastId;
    }
    public function select($table, $col_name, $values, $param_values)
    {
        $col_name = implode(',', $col_name);
        $values = implode(',', $values);
        $stmt = $this->pdo->prepare("SELECT ${col_name} FROM ${table} WHERE ${values} = '${param_values}'");
        return $stmt;
    }
}
