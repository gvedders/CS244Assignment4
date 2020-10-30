<?php
$db = new PDO('sqlite:test.db');
// echo $db->exec("CREATE TABLE test(id INTEGER, str TEXT)");
// echo $db->exec("INSERT INTO test VALUES(1,\"hello\")");
// echo $db->exec("INSERT INTO test VALUES(2,\"sqlite\")");
$results = $db->query("SELECT * FROM test")->fetchALL(PDO::FETCH_ASSOC);
var_dump($results);
