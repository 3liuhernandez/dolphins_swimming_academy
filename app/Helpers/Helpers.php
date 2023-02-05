<?php
if (! function_exists('site_v')) {
    function site_v() {
        return "?v=".env("SITE_VERSION");
    }
}

if (! function_exists('app_name')) {
    function app_name() {
        return env("APP_NAME");
    }
}
