<?php

trait AnimalTrait {
    
    public function eat() {
        return 'Eats fish';
    }

    public function sleep() {
        return 'Sleeping';
    }
}

trait Walking {
    public function walking() {
        return 'Walking';
    }
}

interface Animal {
    public function makesSound();
}


class Dog implements Animal {

    use AnimalTrait;
    public function makesSound() {
        return 'Woof!';
    }


}

class Cat implements Animal {
    use AnimalTrait;
    public function makesSound() {
        return 'Meow!';
    }
}

class Kitten extends Cat {
    use AnimalTrait, Walking;

    
}

