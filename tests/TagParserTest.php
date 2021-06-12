<?php 

namespace Tests;

use App\TagParser;
use PHPUnit\Framework\TestCase;

class TagParserTest extends TestCase
{
  protected TagParser $parser;

    protected function setup():void
    {
      $this->parser = new TagParser();

    }

  public function test_it_parses_a_single_tag()
  {
    $result = $this->parser->parse("personal");
    $expected =["personal"];

    $this->assertSame($expected,$result);

  }
}