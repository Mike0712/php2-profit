<?php

namespace App;

/**
 * Class View
 * @package App
 *
 * @property \App\View $news
 * @property \App\View $last
 */

class View implements \ArrayAccess, \Countable, \Iterator

{
    use \App\ArrayAccess; // Подключаем реализацию для ArrayAccess
    use \App\SetIssetGet;

    public function render($template)
    {
        if(!empty($this->data)) {
            foreach ($this->data as $k => $v) {
                $$k = $v;
            }
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

    public function count()
    {
        return count($this->data);
    }
    // Iterator
    protected $position = 0;

    public function rewind()
    {
        $this->position = 0;
    }

    public function current()
    {
        return $this->data[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        ++$this->position;
    }

    public function valid()
    {
        return isset($this->data[$this->position]);
    }
}