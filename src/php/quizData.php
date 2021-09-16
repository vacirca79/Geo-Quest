<?php

function quizData() {
    return array(
        'introduction' => quizIntroData(),
        'questions' => quizquestionData(),
        'report' => reportData()
    );
}

function quizIntroData() {
    return array(
        'title' => "Rivers",
        'description' => "You'll do fine",
        'imageURL' => "/images/bild.jpg",
        'nextAction' => 'question.php',
        'questionID' => 'q0'
    );
}

function quizQuestionData() {
    return array(
        'q0' => nicoQ0(),
        'q1' => nicoQ1()
    );
}

function nicoQ0() {
    return array(
        'text' => "in which country do the tigris and euphrates rivers meet?",
        'answers' => array(
            array("Turkey", 0),
            array("Israel", 0),
            array("Iraq", 1)
        ),
        'nextAction' => 'question.php',
        'questionID' => 'q1'
    );
}

function nicoQ1() {
    return array(
        'text' => "how many countries does the Rhine river pass through?",
        'answers' => array(
            array(4, 0),
            array(6, 1),
            array(8, 0)
        ),
        'nextAction' => 'report.php'
    );
}

function reportData() {
    return array(
        'title' => "Congratulations",
        'text' => "That was a {$feedback} performance!",
        'feedback_40' => "lousy",
        'feedback_60' => "mediocre",
        'feedback_60' => "super!!!",
        'imageURL' => "/src/images/bild.jpg"
    );
}
?>
