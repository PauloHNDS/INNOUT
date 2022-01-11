<?php

class Model {
    protected static $tableName;
    protected static $columns;
    protected $values = [];

    function __construct($array){
        $this->loadFromArray($array);
    }

    public function loadFromArray($array){
        if ($array) {
            foreach ($array as $key => $value) {
                $this->$key = $value;
            }
        }
    }

    public function __get($key) {
        return $this->values[$key];
    }

    public function __set($key , $value){
        $this->values[$key] = $value;
    }

    public static function getResultSetFromSelect($filters = [] ,$columns = '*') {
        $sql = "SELECT {$columns} FROM " . static::$tableName . static::getFilters($filters);
        $result = DataBase::getResultFromQuery($sql);
        if($result->num_rows === 0) {
            return null;
        } else  {
            return $result;
        }
    }

    public static function get($filters = [], $columns = '*'){
        $objects = [];
        $result = static::getResultSetFromSelect($filters,$columns);
        if ($result) {
            $class = get_called_class();
            while ($row = $result->fetch_assoc()) {
                array_push($objects, new $class($row));
            }
        }
        return $objects;
    }

    private static function getFilters($filters){
        $sql = '';
        if (count($filters) > 0) {
            $sql .= " where 1 = 1 ";
            foreach ($filters as $column => $value) {
                $sql .= " AND ${column} = " . static::getFormatedValue($value);
            }
        }
        return $sql;
    }

    private static function getFormatedValue($value) {
        if (is_null($value)) {
            return "null";
        } elseif (gettype($value) === 'string') {
            return "'{$value}'";
        } else {
            return $value;
        }
    }

}