<?php

use Michelf\Markdown;

class FormatterPHP_Markdown extends TextFormatter
{
    public function about()
    {
        return array(
            'name' => 'PHP Markdown',
        );
    }

    public function run($string)
    {
        return Markdown::defaultTransform($string);
    }
}
