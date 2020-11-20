<?php

namespace Text;

// El estandar correcto, el nombre de la clase debe ser el nombre del archivo sin la extension php
class Format
{
    public static function upperText($value)
    {
        return strtoupper($value);
    }
}