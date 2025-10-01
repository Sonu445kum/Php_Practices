<?php
namespace MyFunctions;

function sayHello() {
    echo "Hello from MyFunctions namespace!";
}

const SITE_NAME = "MyWebsite";

sayHello(); // Call directly
echo SITE_NAME;
?>
