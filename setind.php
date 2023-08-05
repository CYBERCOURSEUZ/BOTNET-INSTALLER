<?php

if (isset($argv[1])) {
    if ($argv[1] === '--name') {
        if (isset($argv[2])) {
$ip = $argv[2];
$server_file = "server.py";
$reverse_file = "payloads/reverse.py";

if (file_exists($server_file)) {
    $a = file_get_contents($server_file);
    $a = str_replace("[[*IP*]]", $ip, $a);
    file_put_contents($server_file, $a);
} else {
    echo "Error: '$server_file' not found.";
}

if (file_exists($reverse_file)) {
    $a = file_get_contents($reverse_file);
    $a = str_replace("[[*IP*]]", $ip, $a);
    file_put_contents($reverse_file, $a);
} else {
    echo "Error: '$reverse_file' not found.";
}

        } else {
            echo "Please provide a name after --name." . PHP_EOL;
        }
    } else {
        echo "Invalid argument." . PHP_EOL;
    }
} else {
    echo "No arguments provided." . PHP_EOL;
}
?>
