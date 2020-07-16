<?php
namespace lib;

class parse
{
    public $url;
    public $data;
    private $pq;

    public function __construct($link)
    {
        $this->url = $link;
    }

    public function get_site()
    {
        $this->data = file_get_contents($this->url);
    }

    public function incude_phpQuery($path)
    {
        require_once $path;
        $this->pq = \phpQuery::newDocument($this->data);
    }
}