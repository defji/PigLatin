<?php 

namespace PigLatin;

class Translator
{
    public static function translate($word)
    {

        return substr($word,1).'-'.substr($word,0,1).'ay';

    }
}