<?php

use PigLatin\Translator;

class PigTest extends PHPUnit_Framework_TestCase {

    public function test_sentence_with_dash()
    {
        $inputText = "Eat imagine you chiefly few end ferrars compass. Be visitor females am ferrars inquiry. Latter law remark two lively thrown. Spot set they know rest its. Raptures law diverted believed jennings consider children the see. Had invited beloved carried the colonel. Occasional principles discretion it as he unpleasing boisterous. She bed sing dear now son half.";
        $referenceText = "Eat-way imagine-way you-way iefly-chay ew-fay end-way errars-fay -cay. e-Bay isitor-vay emales-fay am-way errars-fay .-way. atter-Lay aw-lay emark-ray o-tway ively-lay -thray. ot-Spay et-say ey-thay ow-knay est-ray .-way. aptures-Ray aw-lay iverted-day elieved-bay ennings-jay onsider-cay ildren-chay e-thay -say. ad-Hay invited-way eloved-bay arried-cay e-thay -cay. Occasional-way inciples-pray iscretion-day it-way as-way e-hay unpleasing-way -bay. e-Shay ed-bay ing-say ear-day ow-nay on-say -hay.";
        $pig = new Translator(true);
        $this->assertEquals($referenceText, $pig->translate($inputText));
    }

    public function test_sentence_without_dash()
    {
        $inputText = "Eat imagine you chiefly few end ferrars compass. Be visitor females am ferrars inquiry. Latter law remark two lively thrown. Spot set they know rest its. Raptures law diverted believed jennings consider children the see. Had invited beloved carried the colonel. Occasional principles discretion it as he unpleasing boisterous. She bed sing dear now son half.";
        $referenceText = "Eatway imagineway youway ieflychay ewfay endway errarsfay cay. eBay isitorvay emalesfay amway errarsfay .way. atterLay awlay emarkray otway ivelylay thray. otSpay etsay eythay owknay estray .way. apturesRay awlay ivertedday elievedbay enningsjay onsidercay ildrenchay ethay say. adHay invitedway elovedbay arriedcay ethay cay. Occasionalway inciplespray iscretionday itway asway ehay unpleasingway bay. eShay edbay ingsay earday ownay onsay hay.";
        $pig = new Translator(false);
        $this->assertEquals($referenceText, $pig->translate($inputText));
    }

    public function test_words()
    {
        $words = [
            "beast"=>"east-bay",
            "dough"=>"ough-day",
            "happy"=>"appy-hay",
            "question"=>"uestion-qay",
            "star"=>"ar-stay",
            "three"=>"ee-thray"
        ];
        $pig = new Translator(true);
        foreach($words as $input => $reference) {
            $this->assertEquals($reference, $pig->translateWord($input));
        }
    }


}


