<?php

class Model extends QueryBuilder
{
    public function __construct($pdo)
    {
        parent::__construct($pdo);
        $this->table = 'form';
        $this->colName = array('id', 'paragraph_one,paragraph_two,paragraph_three,paragraph_four');
        $this->values = array();
    }
    public function addItems($paragraph)
    {
        array_shift($this->colName);
        $this->values = $paragraph;
        return parent::addItem($this->table, $this->colName, $this->values);
    }
    public function selectItem($id)
    {
        $this->values = array('id');

        return parent::select($this->table, $this->colName, $this->values, $id);
    }
}
