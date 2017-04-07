# PigLatin
Composer package to translate english text to PigLatin.

## Install
```shell
composer require defji/piglatin
```

## Usage
```php
 use defji\PigLatin\Translator;

 $useDash = TRUE; // use "-" separator in translated text
 $t = new Translator($useDash);
 
 echo $t->translate("All their equipment and instruments are alive.");
 // prints: All-way eir-thay equipment-way and-way instruments-way are-way alive-way.

 // translate slingle word
 echo $t->translateWord("question");
 // prints uestion-qay

```
## Testing
```shell
vendor/bin/phpunit
```
