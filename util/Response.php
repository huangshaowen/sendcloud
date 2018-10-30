<?php

namespace sendcloud\util;

class Response {

    private $body;

    public function __construct($body = null) {
        $this->body = $body;
    }

    public function body() {
        return $this->body;
    }

    public function data() {
        if (empty($this->body)) {
            return false;
        }

        return json_decode(trim($this->body), true);
    }

}
