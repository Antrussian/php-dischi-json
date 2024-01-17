<?php

$stringList = file_get_contents('./json/playlist.json');

header('Content-Type: application/json');

echo $stringList;