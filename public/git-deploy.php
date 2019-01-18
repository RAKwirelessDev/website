<?php

header('Content-Type: text/plain');

echo shell_exec("git pull 2>&1");