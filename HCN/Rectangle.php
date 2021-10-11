<?php

class Rectangle
{
public $width;
public $height;
public function __construct($width,$height)
{
    $this->width = $width;
    $this->height = $height;
}


    public function getHeight()
    {
        return $this->height;
    }


    public function setHeight($height): void
    {
        $this->height = $height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width): void
    {
        $this->width = $width;
    }

    public function getArea()
    {
        return $this->width*$this->height;
    }

    public function getParameter()
    {
        return ($this->width+$this->height)*2;
    }

    public function display()
    {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}