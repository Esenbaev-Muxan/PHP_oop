<?php 

class Car {
    // proporty, atributy 
    public $model;
    protected $year; 
    private $km;

    public function __construct($model, $year, $km) {
        $this->model = $model;
        $this->year = $year;  
        $this->km = $km;
    }

    // methods
    public function drive() {
        return 'driving';
    }

    
}

// $chevy = new Car('chevrolet', 2019, 180000);
// echo $chevy;



// class ElectricCar extends Car {
//     public $battary;

//     public function charge() {
//         return 'charging';
//     }

//     public function drive() {
//         return 'electric';
//     }
// }

// $tesla = new ElectricCar('tesla', 2022);
// $tesla->battary = '50000am'; 


// var_dump($tesla->drive());



// var_dump($audi);

