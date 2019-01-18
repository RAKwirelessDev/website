<?php

error_reporting(0);

if (!isset($_SERVER['HTTP_X_GITHUB_EVENT']) || !isset($_SERVER['HTTP_X_HUB_SIGNATURE'])) {
    http_response_code(302);
    header('Location: /');
    exit;
}

$deploy_signature = 'sha1='.hash_hmac('sha1', file_get_contents("php://input"), $_SERVER['DEPLOY_SECRET']);
$deploy_event = 'push';

if ($_SERVER['HTTP_X_HUB_SIGNATURE'] != $deploy_signature) {
    http_response_code(302);
    header('Location: /');
    exit;
}

header('Content-Type: text/plain');
file_put_contents('git_pull.log', shell_exec("git pull"), FILE_APPEND);
file_put_contents('git_submodule_init.log', shell_exec("git submodule init"), FILE_APPEND);
file_put_contents('git_submodule_update.log', shell_exec("git submodule update"), FILE_APPEND);