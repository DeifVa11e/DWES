<?php
function rgbToHex($r, $g, $b) {
    $hex = '#';
    foreach ([$r, $g, $b] as $c) {
        $c = max(0, min(255, (int)$c));
        $hex .= str_pad(dechex($c), 2, '0', STR_PAD_LEFT);
    }
    return $hex;
}
echo "El código de color decimal 255, 0, 255, en hexadecimal es: " . rgbToHex(255, 0, 255);
?>