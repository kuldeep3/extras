<?php 
require 'vendor/autoload.php';

require 'Bootstrap.php';

require Router::load('Routes/Routes.php')
        ->direct(Request::uri());
