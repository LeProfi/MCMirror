<?php
if (!isset($_GET['version']))
    die('No version specified');
if (!isset($_GET['fork']))
    die('No fork specified');
    
$version = $_GET['version'];
$fork = $_GET['fork'];
if ($fork == "paper") {
    $url = "https://papermc.io/api/v2/projects/paper/versions/$version";

    $response = file_get_contents($url);
    $json = json_decode($response, true);

    $builds = $json['builds'];
    $latest_build = end($builds);

    //Download Latest Build

    $file = "https://papermc.io/api/v2/projects/paper/versions/$version/builds/$latest_build/downloads/paper-$version-$latest_build.jar";

    header("Location: $file");
}
