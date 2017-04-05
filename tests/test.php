<?php

require_once __DIR__ . '/../vendor/autoload.php';


use PigLatin\Translator;
//use Bmitch\PiglatinTranslator;


$randomtext = "Eat imagine you chiefly few end ferrars compass. Be visitor females am ferrars inquiry. Latter law remark two lively thrown. Spot set they know rest its. Raptures law diverted believed jennings consider children the see. Had invited beloved carried the colonel. Occasional principles discretion it as he unpleasing boisterous. She bed sing dear now son half.";
//$randomtext = "eagle question star happy three beast";


$t = new Translator($randomtext,false);
echo $t->translate();
print "\n------\n";


//$t = new PiglatinTranslator();
//print $t->translate($randomtext);
////


