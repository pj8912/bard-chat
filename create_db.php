<?php

$databaseFile = "bardchat.db";

if(file_exists($databaseFile)){
	echo 'Database already exists'.PHP_EOL;
	exit;
}

$db = new SQLite3($databaseFile);
$db->exec("CREATE TABLE IF NOT EXISTS user_chat(
	ucid INTEGER PRIMARY KEY AUTOINCREMENT,
	user_message TEXT NOT NULL,
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP
	)");

$db->exec("CREATE TABLE IF NOT EXISTS bard_chat(
    bid INTEGER PRIMARY KEY AUTOINCREMENT,
	ucid INTEGER NOT NULL,
    bard_reply TEXT NOT NULL,
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREGIN KEY ucid REFERENCES user_chat(ucid)
	)");

$db->close();

echo " 'bardchat' database 'user_chat', 'bard_chat' tables created".PHP_EOL;
?>