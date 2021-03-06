<?php

namespace App\Domain\Government\Data;


class Types
{

  public const R = [
    'short' => 'R',
    'name' => 'Regular',
  ];

  public const I = [
    'short' => 'I',
    'name' => 'Independent',
  ];

  public const P = [
    'short' => 'P',
    'name' => 'Pirate',
  ];

  static function getTypes()
  {
    return (new \ReflectionClass(__CLASS__))->getConstants();
  }
}
