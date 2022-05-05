<?php

$x = null;

var_dump($x);

var_dump($x === null);

$x = "Hello World";
unset($x);                  # sets variable to null

var_dump($x);
