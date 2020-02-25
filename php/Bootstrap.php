<?php

App::bind('config', require 'config.php');

App::bind('database', new Model(
    Connection::make(App::get('config')['database'])
));

