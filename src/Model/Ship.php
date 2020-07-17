<?php

namespace ssim\Model;

class Ship {

  public $name;
  public $shipwright;
  public $fueltank;
  public $cargobay;
  public $expansion;
  public $accel;
  public $turn;
  public $mass;
  public $shields;
  public $armor;
  public $class;
  public $cost;
  public $desc;

  public function __construct($ship) {
    $this->name = $ship->name;
    $this->shipwright = $ship->shipwright;
    $this->fueltank = $ship->fueltank;
    $this->cargobay = $ship->cargobay;
    $this->expansion = $ship->expansion;
    $this->accel = $ship->accel;
    $this->turn = $ship->accel;
    $this->mass = $ship->mass;
    $this->shields = $ship->shields;
    $this->armor = $ship->armor;
    $this->class = $ship->class;
    $this->cost = $ship->cost;
    $this->desc = $ship->desc;
  }

}