<?php
if (isset($_POST['kirim'])) {
    $a = $_POST['binary'];

    function validBraches($a)
    {
        if ($a === "") {
            return true;
        } elseif (!is_string($a)) {
            throw new InvalidArgumentExpection("Not a String");
        }

    }
}
