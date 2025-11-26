<?php

class Tv
{

    //member variables
    public $name = "pankaj";
    public $value = 100;

    //member functions

    function volumnUP()
    {
        $this->value++;
    }

    function volumnDown()
    {
        $this->value--;

    }
}
//create a  objects
$pankajv = new Tv();

$pankajv->volumnUP();
echo  $pankajv->value;
?>