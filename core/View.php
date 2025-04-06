<?php

namespace Core;

class View
{
    public string $layout;
    public string $content = '';

    public function __construct($layout)
    {
        $this->layout = $layout;
    }

    public function render($view, $data = [], $layout = ''): string
    {
        extract($data);
        $viewFile = VIEWS . "/{$view}.php";
        if (is_file($viewFile)) {
            ob_start();
            require $viewFile;
            $this->content = ob_get_clean();
        } else {
            abort("Not found view {$viewFile}", 500);
        }
        if (false === $layout) {
            return $this->content;
        }

        $layout_file_name = $layout ?: $this->layout;
        $layoutFile = VIEWS . "/layouts/{$layout_file_name}.php";
        if (is_file($layoutFile)) {
            ob_start();
            require_once $layoutFile;
            return ob_get_clean();
        } else {
            abort("Not found layout {$layoutFile}", 500);
        }
        return '';
    }

}