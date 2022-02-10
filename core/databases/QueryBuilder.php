<?php
class QueryBuilder{
    protected $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    /**
     * get table data by desire table
     * @param {string} $table
     * $table = request table name
     * return table select data
     */
    public function selectAll($table){
        $statement = $this->pdo->prepare("select * from $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * insert database table data by array keys values
     * @param {associateArray} $dataArr
     * @param {string} $table
     * $dataArr = ["name" => "HWH", "age" => 25]
     * $table   = "users"
     */
    public function insert($dataArr, $table){
        $getDataKeys = array_keys($dataArr); // get keys from array         eg. [name, age]
        $cols = implode(",", $getDataKeys);  // change cols data with comma eg. name,age
        $questionMarks = "";                 // for data replace question mark eg. replace HWH, 25 with ?,?

        foreach($getDataKeys as $key){
            $questionMarks.= "?,";
        }

        $questionMarks = rtrim($questionMarks, ","); // remove right extra comma
        
        $sql = "insert into $table ($cols) values($questionMarks)";
        $statement = $this->pdo->prepare($sql);
        $getDataValues = array_values($dataArr);     // get array values

        $statement->execute($getDataValues);        // execute query with replace data
    }
}