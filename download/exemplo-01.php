<?php 

$link = "https://www.onirikal.com/videos/mp4/battle_games.mp4";

$content = file_get_contents($link);

//var_dump($content);


$parse = parse_url($link);

//var_dump(basename($parse["path"]));

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

 ?>

 <img src="<?=$basename?>">