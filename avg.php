
function srednia_wazona($a, $b) {
    return ($a * 8 + $b * 2) / (8 + 2); // zmiana wag
}
<?php
function srednia($a, $b) {
    return ($a + $b) / 2;
}

function srednia_wazona($a, $b, $waga1, $waga2) {
    return ($a * $waga1 + $b * $waga2) / ($waga1 + $waga2);
}
?><?php function srednia($a, $b) { return ($a + $b) / 2; } ?>
