<?php

if(!mysql_connect(localhost, "andrei", "******")) exit;
mysql_select_db("temp");
$query = mysql_query("SELECT * FROM tp_menu WHERE id=2");
$res = mysql_fetch_assoc($query);
echo json_encode($res);
