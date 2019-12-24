<?php

namespace App\Model\Database;

use App\Model\Database\Connect;

include_once 'connect.php';

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

    public function create(object $obj)
    {
        $keysAndValues = $this->getObjKeysValues($obj);
        $columns = $keysAndValues[0];
        $values = $keysAndValues[1];
        $questionMark = $keysAndValues[2];

        $sql = 'INSERT INTO ' . $this->table . ' (' . $columns . ') VALUES (' . $questionMark . ')';
        $stmt = Connect::connect()->prepare($sql);
        //foreach ($values as $count => $value):
        //    $count2 = $count + 1;
        //    $stmt->bindValue($count2, $value);
        //endforeach;
        $stmt->execute($values);
    }

    private function getObjKeysValues(object $obj) : array
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

    public function insert(stdClass $object = null, array $columns = null, array $values = null)
    {   
        if ($object != null && $columns == null && $values == null) {
            $this->insertObject($object);
        } elseif ($object == null && $columns != null && $values != null) {
            $this->insertArray($columns, $values);
        } else {
            throw new Exception('insert invalid');
        }
    }

    public function insertObject(object $object)
    {
        foreach ($object as $key => $value) {
            echo $key . ' - ' . $value . '<br>';
        }
    }

    public function arrayToObject(array $array) : object
    {
        $obj = new \StdClass();
        foreach ($array as $key => $value) {
            $obj->$key = $value;
        }
        return $obj;
    }

    public function objectToArray(object $obj) : array
    {
        $array = [];
        foreach ($obj as $key => $value) {
            $array[$key] = $value;
        }
        return $array;
    }

    public function insertArray(array $columns, array $values)
    {   
        $columns = implode(',', $columns);
        $questionMark = $this->questionMark(count($values));
        $sql = 'INSERT INTO ' . $this->table . ' (' . $columns . ') VALUES (' . $questionMark . ')';
        $stmt = Connect::connect()->prepare($sql);
        //foreach ($values as $count => $value):
        //    $count2 = $count + 1;
        //    $stmt->bindValue($count2, $value);
        //endforeach;
        $stmt->execute($values);
    }

    private function questionMark(int $countValues) : string
    {
        $questionMark = '';
        for ($i=0; $i < $countValues - 1; $i++) { 
            $questionMark .= '?,';
        }
        return $countValues > 0 ? $questionMark . '?' : '';
    }

}