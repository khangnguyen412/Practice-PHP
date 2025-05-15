<?php
function checkNotification($id)
{
    
};
function showNotification($name, $button, $url)
{
    $result = '<h4 class="text-warning">' . $name . '</h4>';
    $button_back = "$button";
    include "$url";
};
