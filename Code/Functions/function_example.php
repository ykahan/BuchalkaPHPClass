<?php

function sayHello($name="Berel"){
	echo "Hello, " . $name;
	return $name . " is a great guy!";
}

sayHello("Brandon");
sayHello();
echo sayHello("Yankel");
