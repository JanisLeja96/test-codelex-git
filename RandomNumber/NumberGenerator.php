<?php

class NumberGenerator
{
    public static function getNumber()
    {
        return random_int(1, 1000);
    }
}