<?php 

require_once 'quiz_model.inc.php';
require_once '../sessions.php';

class QuizControl {
    private $quizz;
    private $correctAnswers;

    public function __construct () {
        $this->quizz = new QuizModel();
        $this->correctAnswers = [
            'qn1' => 'knee',
            'qn2' => 'iago',
            'qn3' => 'tin',
            'qn4' => 'constantinople',
            'qn5' => 'marathon',
            'qn6' => 'wellington',
            'qn7' => 'netherlands',
            'qn8' => 'robert_pattinson',
            'qn9' => 'canada',
            'qn10' => 'china'
        ];
    }

    public function quizForm() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $fname = htmlspecialchars(trim($_POST["fname"]));
            $lname = htmlspecialchars(trim($_POST["lname"]));
            $age = htmlspecialchars(trim($_POST["age"]));
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
    }

    $errors = [];

    if (empty($fname)) {
        $errors[] = "Firstname is required.";
    }

    if (empty($lname)) {
        $errors[] = "Lastname is required.";
    }

    $validAges = ['less_than_18', '19_29', '30_39', '40_49', '50_59', '60+'];

    if (empty($age) || !in_array($age, $validAges)) {
        $errors[] = "Valid age selection is required.";
    }

    if (empty($qn1)) $errors[] = "Answer for question 1 is required.";
    if (empty($qn2)) $errors[] = "Answer for question 2 is required.";
    if (empty($qn3)) $errors[] = "Answer for question 3 is required.";
    if (empty($qn4)) $errors[] = "Answer for question 4 is required.";
    if (empty($qn5)) $errors[] = "Answer for question 5 is required.";
    if (empty($qn6)) $errors[] = "Answer for question 6 is required.";
    if (empty($qn7)) $errors[] = "Answer for question 7 is required.";
    if (empty($qn8)) $errors[] = "Answer for question 8 is required.";
    if (empty($qn9)) $errors[] = "Answer for question 9 is required.";
    if (empty($qn10)) $errors[] = "Answer for question 10 is required.";

    if (empty($errors)) {
        $this->quizz->answerToQuestions($fname, $lname, $age, $qn1, $qn2, $qn3, $qn4, $qn5, $qn6, $qn7, $qn8, $qn9, $qn10);
        $score = $this->calculateScore([
            'qn1' => $qn1,
            'qn2' => $qn2,
            'qn3' => $qn3,
            'qn4' => $qn4,
            'qn5' => $qn5,
            'qn6' => $qn6,
            'qn7' => $qn7,
            'qn8' => $qn8,
            'qn9' => $qn9,
            'qn10' => $qn10,
        ]);
        echo "Your quiz was submitted successfully. Your score is $score/10";
    } else {
        foreach($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}
private function calculateScore($answers) {
    $score = 0;
    foreach($this->correctAnswers as $question => $correctAnswers) {
        if (isset($answers[$question]) && $answers[$question] === $correctAnswers) {
            $score++;
        }
    }
    return $score;
}
}

$quizControl = new QuizControl();
$quizControl->quizForm();