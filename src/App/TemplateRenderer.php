<?php

namespace App;

class TemplateRenderer
{
    public function render($file, array $data = [])
    {
        ob_start();
        extract($data);
        require $file;
        return ob_get_clean();
    }

    public function escape($value)
    {
        return htmlspecialchars((string) $value, ENT_QUOTES);
    }
}