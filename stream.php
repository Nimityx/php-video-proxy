<?php

set_time_limit(0);

$url = isset($_GET['url']) ? $_GET['url'] : null;

if ($url == false) {
    die("No url provided");
}

$video = new \Video\VideoStreamer();
$video->stream($url);

?>
