<?php

namespace Tests;

use App\Question;
use App\Quiz;
use PHPUnit\Framework\TestCase;

class QuizTest extends TestCase
{
  /** @test  */
  public function it_consists_of_question()
  {
    $quiz = new Quiz();

    $quiz->addQuestion(new Question('What is 2+2?',4));

    $this->assertCount(1,$quiz->questions());
  }

  /** @test  */
  public function it_can_be_graded ()
  {
    $quiz = new Quiz();
    $quiz->addQuestion(new Question('What is 2+2?',4));
    $question = $quiz->nextQuestion();
    $question->answer(4);

    $this->assertEquals(100,$quiz->grade());

  }
}