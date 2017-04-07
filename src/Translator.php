<?php 

namespace defji\PigLatin;

class Translator
{

    public function __construct($useDash=FALSE)
    {
        $this->dash = $useDash ? '-':'';
    }

    protected $consonants = [
        'b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','z',
        'B','C','D','F','G','H','J','K','L','M','N','P','Q','R','S','T','V','W','X','Z'
    ];
    protected $vowels = [
        'a','e','i','o','u','y',
        'A','E','I','O','U','Y',
    ];

    protected $marks = [
        '.', ',', '?', '!', ';', ':', '-'
    ];

    public function translate($input)
    {
        $translated = "";
        $words = explode(" ",$input);
        foreach($words as $word) {
            $translated.= $this->translateWord($word)." ";
        }
        return substr($translated,0,-1);
    }


    public function translateWord($word)
    {
        $arr = str_split($word);
        list($first) = $arr;
        list($last) = array_reverse($arr);

        $mark="";
        if(in_array($last,$this->marks)) {
            $mark=$last;
            $word = substr($word,-1);
        }

        $counter = 0;
        $translation = "";
        $suffix = "";



        if(in_array($first,$this->consonants)) {
            while (in_array($arr[$counter], $this->consonants)) {
                $suffix .= $arr[$counter];
                $counter++;
            }
            $translation .= substr($word, $counter);
            $translation .= $this->dash.$suffix.'ay';
        } else {
            $suffix .= $this->dash.'way';
            $translation .= $word . $suffix;
        }
        return trim($translation.$mark);
    }
}