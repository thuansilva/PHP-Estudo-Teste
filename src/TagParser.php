<?php

namespace App;

class TagParser
{
  public function parse(string $tags): array
  {
    return $tags =  preg_split('/ ?[,|!] ?/',$tags);


  }
}