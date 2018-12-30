<?php

namespace Core;

class Commons
{

    public static function file_build_path(string ...$segments) {
        return join(DIRECTORY_SEPARATOR, $segments);
    }

    public static function url_path() {
        $url_path = $_SERVER['REQUEST_URI'];
        $new_url_path = self::slugify($url_path);
        self::force_slugify($new_url_path, $url_path);
        return (!empty($new_url_path) ? $new_url_path : '/');
    }

    public static function force_slugify(string $new_url_path, string $old_url_path) {
        if ($new_url_path !== $old_url_path) {
            header('Location: '.$new_url_path);
            exit;
        }
    }

    public static function slugify(string $url_path) {
        $new_url_path = preg_replace('/\?.*/', '', $url_path);
        $new_url_path = preg_replace('/[\/]{2,}/', '/', $new_url_path);
        $new_url_path = preg_replace('/[^\/]$/', '$0/', $new_url_path);
        $new_url_path = ($new_url_path[0] !== '/' ? $url_path : $new_url_path);
        return $new_url_path;
    }

    public static function routes_slugify(array $routes) {
        foreach ($routes as $route => $view_file) {
            $new_routes[self::slugify($route)] = $view_file;
        }
        return $new_routes;
    }

}