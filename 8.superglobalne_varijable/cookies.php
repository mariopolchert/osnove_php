<?php

setcookie('name', 'John Doe', time() + 3600, '/');
var_dump($_COOKIE);