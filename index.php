<?php
$message = "<ul>";

$depart = -17827;
$arrive = 14568;
while ($depart <= $arrive)
{
    $resteModulo = $depart % 24;
    if ($resteModulo == 0) {
        $message .= "<li>";
        $message .= $depart;
        $message .= "</li>";
    }
    $depart += 7;
}
$message .= "</ul>";
echo $message;
