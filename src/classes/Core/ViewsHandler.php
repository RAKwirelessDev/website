<?php

namespace Core;

class ViewsHandler
{

    public static function yield(string $view_file) {
        global $data;
        $view_file = Commons::file_build_path(__DIR__, '..', '..', 'views', $view_file);
        if (file_exists($view_file)) {
            include($view_file);
        } else {
            ErrorHandler::interrupt('sys::VIEW_COMPONENT_NOT_FOUND', 400);
        }
    }

}