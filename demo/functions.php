<?php

function url($value) {
    return $_SERVER['REQUEST_URI'] === $value;
 }
 