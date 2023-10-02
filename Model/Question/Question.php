<?php


    abstract class Question
    {
        private $questionNr;
        private $category;
        private $questionType;


        //abstract public function loadQuestion() : string;

        //abstract public function updateQuestion();

        abstract function createQuestion($questionString);

        //abstract public function deleteQuestion();
        abstract public function displayQuestion();

        abstract public function displayAnswer();



    }