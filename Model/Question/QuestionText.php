<?php require 'Question.php';

    class QuestionText extends Question
    {

        private $questionString;
        private $answerString;

        private array $QandA = array();


        public function __construct($questionString, $answerString)
        {
            $this->questionString = $questionString;
            $this->answerString = $answerString;
        }


        public function createQuestion($questionString): void
        {
            $this->questionString = $questionString;
        }

        public function displayQuestion(): void
        {
            echo $this->questionString;
        }

        public function displayAnswer(): void
        {
            echo $this->answerString;
        }
    /*
        public function checkAnswer(Answer $answer): bool
        {
            return parent::checkAnswer($answer); // TODO: Change the autogenerated stub
        }
    */



    }