<?php

require_once 'init.php';


// Dependency Injection
$showcase = new Showcase(new Advertising);

$showcase->unPublishAdvertising();

$showcase->publishAdvertising();