<?php

header('Content-Type: text/plain');

file_put_contents('deploy.txt', print_r($_SERVER));
echo shell_exec("git pull");