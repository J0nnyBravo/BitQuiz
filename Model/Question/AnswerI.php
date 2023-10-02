<?php

    class AnswerI implements ICheckAnswer
    {


        public function __construct(AnswerI $answer)
        {
            parent::__construct($answer);
        }


    }