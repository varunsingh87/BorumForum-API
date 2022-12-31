<?php

require './include/question/QuestionsRoute.php';
require __DIR__ . '/../vendor/autoload.php';

use BorumForum\Questions\QuestionsRoute;
use VarunS\PHPSleep\DotEnv;

DotEnv::loadIfLocal();
new QuestionsRoute();
