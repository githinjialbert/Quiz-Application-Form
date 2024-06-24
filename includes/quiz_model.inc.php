<?php

class QuizModel {
    private $dbserver = 'localhost';
    private $dbname = 'quiz_form';
    private $dbusername = 'root';
    private $dbpassword = '';
    private $conn;

    public function __construct() {
        try {

            $this->conn = new PDO("mysql:host={$this->dbserver}; dbname={$this->dbname}", $this->dbusername, $this->dbpassword);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection Failed: " . $e->getMessage());
        }
    }

    public function answerToQuestions($fname, $lname, $age, $qn1, $qn2, $qn3, $qn4, $qn5, $qn6, $qn7, $qn8, $qn9, $qn10) {
        try {
            
            $stmt = $this->conn->prepare("INSERT INTO quiz_response(fname, lname, age, qn1, qn2, qn3, qn4, qn5, qn6, qn7, qn8, qn9, qn10) VALUES(:fname, :lname, :age, :qn1, :qn2, :qn3, :qn4, :qn5, :qn6, :qn7, :qn8, :qn9, :qn10);");
            $stmt->bindParam(":fname", $fname);
            $stmt->bindParam(":lname", $lname);
            $stmt->bindParam(":age", $age);
            $stmt->bindParam(":qn1", $qn1);
            $stmt->bindParam(":qn2", $qn2);
            $stmt->bindParam(":qn3", $qn3);
            $stmt->bindParam(":qn4", $qn4);
            $stmt->bindParam(":qn5", $qn5);
            $stmt->bindParam(":qn6", $qn6);
            $stmt->bindParam(":qn7", $qn7);
            $stmt->bindParam(":qn8", $qn8);
            $stmt->bindParam(":qn9", $qn9);
            $stmt->bindParam(":qn10", $qn10);
    
            return $stmt->execute();

        } catch (PDOException $e) {
            die("Failed to submit your answers" . $e->getMessage());
        }
    }
}