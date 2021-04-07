 <?php

$jsonIn = file_get_contents('https://discordapp.com/api/guilds/356230556738125824/widget.json');
$JSON = json_decode($jsonIn, true);

$membersCount = count($JSON['members']);

echo "Number of members: " . $membersCount;
?>