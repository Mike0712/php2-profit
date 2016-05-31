<?php

namespace App;

/**
 * Class View
 * @package App
 *
 * @property \App\View $news
 * @property \App\View $last
 */

class View

{
    use \App\SetIssetGet;

    public function render($template)
    {
        foreach ($this->data as $k => $v) {
            $$k = $v;
        };
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }

    public function display($template)
    {
        echo $this->render($template);
    }
}