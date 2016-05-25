<?php

$data = $this->req->data;

$this->db->connect();

// DB exec here

$this->db->disconnect();

$this->req->response($res);

?>