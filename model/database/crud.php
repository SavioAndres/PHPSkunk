<?php

namespace Model\Database;

class Crud extends Connect
{

    private $table;

    public function __construct(string $table)
    {
        $this->table = $table;
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

    private function insertObject(stdClass $object)
    {

    }

    private function insertArray(array $columns, array $values)
    {   
        $columns = implode(',', $columns);
        $questionMark = $this->questionMark(count($values));
        $sql = 'INSERT INTO ' . $this->table . ' (' . $columns . ') VALUES (' . $questionMark . ')';
        $stmt = Connect::connect()->prepare($sql);
        foreach ($values as $count => $value):
            $stmt->bindValue($count, $value);
        endforeach;
        $stmt->execute();
    }

    private function questionMark(int $countValues)
    {
        $questionMark = '';
        for ($i=0; $i < $countValues - 1; $i++) { 
            $questionMark .= '?,';
        }
        return $countValues > 0 ? $questionMark . '?' : '';
    }

}
