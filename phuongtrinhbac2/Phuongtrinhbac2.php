<?php

class Phuongtrinhbac2
{
    private  $a;
    private $b;
    private  $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA()
    {
        return $this->a;
    }

    public function setA($a)
    {
        $this->a = $a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function setB($b)
    {
        $this->b = $b;
    }

    public function getC()
    {
        return $this->c;
    }

    public function setC($c)
    {
        $this->c = $c;
    }

    public function checkABC()
    {
        if ($this->a == 0) {
            if ($this->b == 0) {
                die("phuong trinh vo nghiem");
            } else {
                echo("phuong trinh co 1 nghiem: " . " n= " . ((-$this->c) / $this->b));
                die();
            }

        }


    }

    public function getDelta()
    {
        return (($this->b * $this->b) - (4 * $this->a * $this->c));
    }

    public function getN1()
    {
        return ((-$this->b) + sqrt($this->getDelta())) / (2 * $this->a);
    }

    public function getN2()
    {
        return ((-$this->b) - sqrt($this->getDelta())) / (2 * $this->a);
    }

    public function calculate()
    {
        $this->checkABC();
        if ($this->getDelta() > 0) {
            echo("phuong trinh co nghiem thu nhat la: " . $this->getN1() . "<br>");
            echo("phuong trinh co nghiem thu hai la: " . $this->getN2());
        } elseif ($this->getDelta() == 0) {
            echo("phuong trinh co nghiem kep: n1 = n2 = " . $this->getN1());
        } else {
            echo "phuong trinh vo nghiem";
        }
    }

}


