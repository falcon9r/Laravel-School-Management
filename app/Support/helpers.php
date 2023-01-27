<?php

function locale_route($name, $parameters = [], $absolute = true): string
{
    return route($name, array_merge($parameters, [
        'locale' => App::getLocale()
    ]), $absolute);
}

