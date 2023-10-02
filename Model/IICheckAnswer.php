<?php require '../Model/Question/AnswerI.php';

    interface ICheckAnswer
    {
        public function checkAnswer(AnswerI $answer) : bool;
    }