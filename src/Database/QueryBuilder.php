<?php

namespace App\Database;

use Connection;
use \PDO;

class QueryBuilder
{
    private $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    //Select all from a table
    public function getAll($table, $class = "StdClass")
    {
        $stmt = $this->pdo->prepare("SELECT * FROM $table");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, $class);
    }

    //Select all from a table
    public function getLast4ByColumn($table, $columnName, $class = "StdClass")
    {
        $stmt = $this->pdo->prepare("SELECT * FROM $table ORDER BY $columnName DESC LIMIT 4");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, $class);
    }

    //Find by id on a table
    public function findById($table, $id, $class = "StdClass")
    {
        $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE id=:id");
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    //Filter information by a column
    public function filter($table, $id, $columnName, $class = "StdClass")
    {
        $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE $columnName=:id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_CLASS, $class);
    }

    //Filter information from 2 tables and innner join the information
    public function filterTwoTables($table, $table2, $id, $columnName, $columnName2, $class = "StdClass")
    {
        $stmt = $this->pdo->prepare("SELECT $table.$columnName, $table2.$columnName2, COUNT(*) as Count FROM $table INNER JOIN $table2 ON $table.$columnName = $table2.ID WHERE $table.IDClub=:id GROUP BY $table2.$columnName2;");
        $stmt->execute(['id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_CLASS, $class);
    }

    //Filter information by a column
    public function selectByColumn($table, $value, $columnName, $class = "StdClass")
    {
        $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE $columnName=:val");
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        $stmt->execute(['val' => $value]);
        return $stmt->fetch();
    }

    //Filter information by a column and count it
    public function selectCount($table, $id, $columnName, $class = "StdClass")
    {
        $stmt = $this->pdo->prepare("SELECT COUNT(*) as Count FROM $table WHERE $columnName=:id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_CLASS, $class);
    }

    //Delete by and id
    public function deleteById($table, $id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM $table WHERE id=:id");
        $stmt->execute(['id' => $id]);
        return $stmt->rowCount() == 1;
    }

    //Delete by and id and it deletes even if the it has linked foregin keys 
    public function deleteUserById($table, $id)
{
    // Check if there are any related records in the "cart" table
    $relatedCartProducts = $this->pdo->query("SELECT COUNT(*) FROM cart WHERE UserID=$id")->fetchColumn();
    $relatedProducts = $this->pdo->query("SELECT COUNT(*) FROM product WHERE IDSeller=$id")->fetchColumn();

    if ($relatedCartProducts > 0) {
        // Delete the related records first
        $this->pdo->exec("DELETE FROM cart WHERE UserID=$id");
    }

    if ($relatedProducts > 0) {
        // Delete the related records first
        $this->pdo->exec("DELETE FROM product WHERE IDSeller=$id");
    }
    
    // Delete the user record
    $stmt = $this->pdo->prepare("DELETE FROM $table WHERE id=:id");
    $stmt->execute(['id' => $id]);
    
    return $stmt->rowCount() == 1;
}

    //Add values to a table
    public function create($table, $attributes)
    {
        $stmt = $this->pdo->prepare("INSERT INTO $table (" .
            implode(",", array_keys($attributes)) .
            ") VALUES (:" . implode(', :', array_keys($attributes)) . ")");
        $stmt->execute($attributes);
    }

    //Update by id
    public function update($table, $id, $attributes)
    {
        $query = "UPDATE $table SET ";
        foreach ($attributes as $key => $attribute)
            $query .= "$key=:$key,";
        $query = rtrim($query, ",");
        $query .= ' WHERE id=:id';
        $attributes['id'] = $id;
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($attributes);
        return $stmt->rowCount() == 1;
    }

    //Search on a table
    public function searchByColumn($table, $searchTerm, $columnName, $class = "StdClass")
    {
        $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE $columnName LIKE :searchTerm");
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        $stmt->execute(['searchTerm' => "%$searchTerm%"]);
        return $stmt->fetchAll();
    }
}