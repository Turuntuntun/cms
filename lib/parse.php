<?php
namespace lib;

class parse
{
    public $url;
    public $data;

    public function __construct($link)
    {
        $this->url = $link;
    }

    public function get_site()
    {
        $this->data = file_get_contents($this->url);
    }
}