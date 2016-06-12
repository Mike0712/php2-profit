<?php

namespace App;


class Logger

{
    protected $path;
    protected $line;
    protected $code;
    protected $message;

    public function __construct($e, $mes = '')
    {
        $this->path = $e->getFile();
        $this->line = $e->getLine();
        $this->code = $e->getCode();
        $this->message = $e->getMessage() ?: $mes;
    }

    public function write()
    {
        $data = date("Y-m-d H:i:s") . '    Ошибка в файле: ' . $this->path . ' в строке: ' . $this->line . ' Код ошибки '
            . $this->code . ' Название ошибки: ' . $this->message . "\n";
        file_put_contents(__DIR__ . '/../logs/error.log', $data, FILE_APPEND | LOCK_EX);
    }
}