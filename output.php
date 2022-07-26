<?php
if (isset($_POST['kirim1'])) {
    $a = $_POST['binary'];

    function hitung($a)
    {
        $c = null;
        $b = count($a);
        $b -= 1;
        for ($b; $b < $a; $b--) {
            if ($a[$b] == 0) {
                return $c;
            } else {
                $c += $a[$b];
            }
        }
    }
    echo hitung($a);
}
