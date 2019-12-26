<?php

namespace App\Model\Database;

use App\Model\Database\Connect;

class Crud extends Connect
{
    private $table;

    public function __construct(string $table = null)
    {
        $this->table = $table;
    }

    public function setTable(string $table)
    {
        $this->table = $table;
    }

    public function getTable() : string
    {
        return $this->table;
    }

    public function create(object $obj) : void
    {
        $keysAndValues = $this->getStringKeysValues($obj);
        $columns = $keysAndValues[0];
        $values = $keysAndValues[1];
        $questionMark = $keysAndValues[2];

        $sql = 'INSERT INTO ' . $this->table . ' (' . $columns . ') VALUES (' . $questionMark . ')';
        $stmt = Connect::connect()->prepare($sql);
        $stmt->execute($values);
    }

    public function createBySendingArray(array $array) : void
    {
        $this->create((object) $array);
    }

    private function getStringKeysValues(object $obj) : array
    {   
        (string) $keys = '';
        (array) $values = [];
        (string) $questionMark = '';

        foreach ($obj as $key => $value) {
            $keys .= $key . ',';
            $values[] = $value;
            $questionMark .= '?,';
        }

        $keys = substr($keys, 0, -1);
        $questionMark = substr($questionMark, 0, -1);

        return [$keys, $values, $questionMark];
    }

    public function read(int $id) : array
    {
        $stmt = Connect::connect()->prepare('SELECT * FROM ' . $this->table . ' WHERE id=?');
        $stmt->execute([$id]); 
        return $stmt->fetch();
    }

}