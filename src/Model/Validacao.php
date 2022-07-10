<?php

namespace APP\Model;

class Validacao
{
    public static function validateNome(string $name): bool
    {
        return mb_strlen($name) > 4;
    }

    public static function validateCode(float $code): bool
    {
        return $code > 0;
    }
}