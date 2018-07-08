<?php

require_once EXTENSIONS . '/php_markdown/vendor/autoload.php';

use Michelf\MarkdownExtra;

class FormatterPHP_Markdown_Extra extends TextFormatter
{
    public function about()
    {
        return array(
            'name' => 'PHP Markdown Extra',
        );
    }

    public function run($string)
    {
        return MarkdownExtra::defaultTransform($string);
    }
}
