<?php
class validate{
    function checkUserName($name) {
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            return false;
        }
        return true;
    }

    function checkUserEmail($email) {
        if (!preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $email)) {
            return false;
        }
        return true;
    }
}
?>
