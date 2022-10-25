<?php 

$data = fread($file, filesize("data.json"));
	$data = json_decode($data);
	var_dump($data);

	echo "<hr><hr>";

	for($i = 0; $i < count($data); $i++) {
		echo $data[$i]->fname . " " . $data[$i]->lname . "<br>";
		?>