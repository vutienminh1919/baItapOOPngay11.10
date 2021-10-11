<?php

class student
{
    public static $count= 0;
    public $name;
    private $age;
    private $math;
    private $physical;
    private $chemistry;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        self :: $count++;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }


    public function getChemistry()
    {
        return $this->chemistry;
    }

    public function setChemistry($chemistry): void
    {
        $this->chemistry = $chemistry;
    }

    public function setScore($math,$physical,$chemistry)
    {
        $this->setMath($math);
        $this->setPhysical($physical);
        $this->setChemistry($chemistry);
    }

    public function getAvg()
    {
        $total = $this->math+$this->physical+$this->chemistry;
        $avg = $total/3;
        return $avg;
    }
    public static function getCount(){

    }
}
