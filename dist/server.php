<?php

$_POST = json_decode(file_get_contents("php://input"), true);
echo var_dump(file_get_contents("php://input"));