<?php

namespace {

    use Sohoa\Framework\Framework;
    date_default_timezone_set("Europe/Paris");
    require_once __DIR__ . '/../vendor/autoload.php';

    $framework = new Framework();
    $framework->run();
}
