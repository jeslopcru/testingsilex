<?php

namespace Tutorial\lib;


class Calculator {

    public function add( $number1, $number2 )
    {
        if(!is_numeric($number1) || !is_numeric($number2))
        {
            return false;
        }
        return $number1 + $number2;
    }

}