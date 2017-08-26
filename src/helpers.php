<?php

use Samrap\Acf\Acf;

if (!function_exists('field')) {
    /**
     * Return a new builder instance for a field.
     *
     * @param  string $name
     * @param  int    $id
     * @return \Samrap\Acf\Fluent\Builder
     */
    function field($name, $id = null)
    {
        return Acf::field($name, $id);
    }
}

if (!function_exists('sub')) {
    /**
     * Return a new builder instance for a subfield.
     *
     * @param  string $name
     * @return \Samrap\Acf\Fluent\Builder
     */
    function sub($name)
    {
        return Acf::subField($name);
    }
}

if (!function_exists('option')) {
    /**
     * Return a new builder instance for an option field.
     *
     * @param  string $name
     * @return \Samrap\Acf\Fluent\Builder
     */
    function option($name)
    {
        return Acf::option($name);
    }
}
