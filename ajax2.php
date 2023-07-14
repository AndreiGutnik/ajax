<?php
if(isset($_POST["ter"])) $ter = $_POST["ter"];

if(!mysql_connect(localhost, "andrei", "******")) exit;
mysql_select_db("temp");
$query = mysql_query("SELECT * FROM tp_menu WHERE id=2");
$res = mysql_fetch_assoc($query);
$res["ter"] = $ter;
echo json_encode($res);
