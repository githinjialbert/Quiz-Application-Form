<?php 

require_once 'quiz_model.inc.php';
require_once '../sessions.php';

class QuizControl {
    private $quizz;

    public function __construct () {
        $this->quizz = new QuizModel();
    }

    public function quizForm() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $fname = htmlspecialchars(trim($_POST["fname"]));
            $lname = htmlspecialchars(trim($_POST["lname"]));
            $qn1 = $_POST["qn1"];
            $qn2 = $_POST["qn2"];
            $qn3 = $_POST["qn3"];
            $qn4 = $_POST["qn4"];
            $qn5 = $_POST["qn5"];
            $qn6 = $_POST["qn6"];
            $qn7 = $_POST["qn7"];
            $qn8 = $_POST["qn8"];
            $qn9 = $_POST["qn9"];
            $qn10 = $_POST["qn10"];

            $result = $this->quizz->answerToQuestions($fname, $lname, $age, $qn1, $qn2, $qn3, $qn4, $qn5, $qn6, $qn7, $qn8, $qn9, $qn10);

            if ($result) {
                echo "Quiz responses submitted successfully.";
            } else {
                echo "Failed to submit quiz responses.";

        }
    }
}
}

$quizControl = new QuizControl();
$quizControl->quizForm();