<?php

$included_files = get_included_files();

require "Views/login.view.php";

foreach($included_files as $filename){
    if(strcmp($filename,'login.view.php')) {
        echo "test";
    }
}
