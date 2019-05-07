<?php

abstract class Monster {
    protected $name;
    protected $blood;
    abstract protected function attack();
}

class Fashi extends Monster {
    protected function attack() {}
}

class Zhanshi extends Monster {
    protected function attack() {}
}