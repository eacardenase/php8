<?php

$id = "ch_akshkjaclk_test";

$result = str_starts_with($id, "ch_");
var_dump($result);

$result = str_ends_with($id, "_test1");
var_dump($result);

$result = str_contains($id, "hkj");
var_dump($result);