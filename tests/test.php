<?php

use defji\PigLatin\Translator;

class PigTest extends PHPUnit_Framework_TestCase
{
    public function test_sentence_with_dash()
    {
        $inputText = 'All their equipment and instruments are alive.';
        $referenceText = 'All-way eir-thay equipment-way and-way instruments-way are-way alive-way.';
        $pig = new Translator(true);
        $this->assertEquals($referenceText, $pig->translate($inputText));
    }

    public function test_sentence_without_dash()
    {
        $inputText = 'All their equipment and instruments are alive.';
        $referenceText = 'Allway eirthay equipmentway andway instrumentsway areway aliveway.';
        $pig = new Translator(false);
        $this->assertEquals($referenceText, $pig->translate($inputText));
    }

    public function test_words()
    {
        $words = [
            'beast'   => 'east-bay',
            'dough'   => 'ough-day',
            'happy'   => 'appy-hay',
            'question'=> 'uestion-qay',
            'star'    => 'ar-stay',
            'three'   => 'ee-thray',
        ];
        $pig = new Translator(true);
        foreach ($words as $input => $reference) {
            $this->assertEquals($reference, $pig->translateWord($input));
        }
    }
}
