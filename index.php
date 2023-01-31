<?php
$ip = '192.168.10.19';
$cidr = '/27';

list($ip, $mask) = explode('/', $ip . $cidr);
$mask = -1 << (32 - $mask);
$network = long2ip(ip2long($ip) & $mask);
$broadcast = long2ip(ip2long($ip) | (~$mask & 0xFFFFFFFF));
$gateway = long2ip(ip2long($network) + 1);

echo "Network: $network\n";
echo "Broadcast: $broadcast\n";
echo "Gateway: $gateway\n";