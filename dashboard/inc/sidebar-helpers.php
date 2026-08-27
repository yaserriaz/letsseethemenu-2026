<?php
/**
 * Shared dashboard sidebar helpers.
 */
if (!function_exists('dash_link_class')) {
    function dash_link_class($active)
    {
        return 'flex items-center gap-3 px-4 py-3 text-sm ' . ($active ? 'dash-active font-bold' : '');
    }
}
