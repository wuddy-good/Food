<?php
$_POST = json_decode(file_get_contents("php://input"), ture);
echo var_dump($_POST);