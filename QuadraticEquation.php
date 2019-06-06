<?php


class QuadraticEquation
{
    private $coefficientA;
    private $coefficientB;
    private $coefficientC;

    function __construct($coefficientA, $coefficientB, $coefficientC)
    {
        $this->coefficientA = $coefficientA;
        $this->coefficientB = $coefficientB;
        $this->coefficientC = $coefficientC;
    }

    function setCoefficientA($coefficientA)
    {
        $this->coefficientA = $coefficientA;
    }

    function setCoefficientB($coefficientB)
    {
        $this->coefficientB = $coefficientB;
    }

    function setCoefficientC($coefficientC)
    {
        $this->coefficientC = $coefficientC;
    }

    function getCoefficientA()
    {
        return $this->coefficientA;
    }

    function getCoefficientB()
    {
        return $this->coefficientB;
    }

    function getCoefficientC()
    {
        return $this->coefficientC;
    }

    function getDiscriminant()
    {
        return (($this->coefficientB * $this->coefficientB) - (4 * $this->coefficientA * $this->coefficientC));
    }

    function getDoubleExperience(){
        return (-$this->coefficientB / (2 * $this->coefficientA));
    }

    function getRoot1()
    {
        return ((-$this->coefficientB + pow($this->getDiscriminant(), 0.5)) / 2 * $this->coefficientA);
    }

    function getRoot2(){
        return ((-$this->coefficientB - pow($this->getDiscriminant(), 0.5)) / 2 * $this->coefficientA);
    }
}