<?php 
$db=new SQLite3('cluster.db');

$tsql= "SELECT count(*) FROM clustel";
$indisql= "SELECT count(*) FROM clustel where KOMPETITOR LIKE '%Indihome%' COLLATE NOCASE";
$firstsql= "SELECT count(*) FROM clustel where KOMPETITOR LIKE '%Fir%' COLLATE NOCASE";
$mncsql= "SELECT count(*) FROM clustel where KOMPETITOR LIKE '%MNC%' COLLATE NOCASE";
$indosql= "SELECT count(*) FROM clustel where KOMPETITOR LIKE '%Indov%' COLLATE NOCASE";
$bizsql= "SELECT count(*) FROM clustel where KOMPETITOR LIKE '%Biz%' COLLATE NOCASE";
$nextsql= "SELECT count(*) FROM clustel where KOMPETITOR LIKE '%nex%' COLLATE NOCASE";
$otsql= "SELECT count(*) FROM clustel where KOMPETITOR LIKE '%indosat%' OR KOMPETITOR LIKE '%bo%'  
OR KOMPETITOR LIKE '%para%' or KOMPETITOR LIKE '%republic%' or KOMPETITOR LIKE '%oxygen%'
or KOMPETITOR LIKE '%oke%' or KOMPETITOR LIKE '%play%' or KOMPETITOR LIKE '%top%' or KOMPETITOR LIKE '%big%'
or KOMPETITOR LIKE '%k-%' or KOMPETITOR LIKE '%orange%' or KOMPETITOR LIKE '%kabel%'
or KOMPETITOR LIKE '%prima%' or KOMPETITOR LIKE '%cable%'
COLLATE NOCASE";
$nosql= "SELECT count(*) FROM clustel where KOMPETITOR =''";

$result=$db->query($tsql);
$row = $result->fetchArray(SQLITE3_ASSOC);
$total = $row["count(*)"];

$result=$db->query($indisql);
$row = $result->fetchArray(SQLITE3_ASSOC);
$indihome = $row["count(*)"];

$result=$db->query($firstsql);
$row = $result->fetchArray(SQLITE3_ASSOC);
$firstmedia = $row["count(*)"];

$result=$db->query($mncsql);
$row = $result->fetchArray(SQLITE3_ASSOC);
$mnc = $row["count(*)"];

$result=$db->query($indosql);
$row = $result->fetchArray(SQLITE3_ASSOC);
$Indovision = $row["count(*)"];

$result=$db->query($bizsql);
$row = $result->fetchArray(SQLITE3_ASSOC);
$biznet = $row["count(*)"];

$result=$db->query($nextsql);
$row = $result->fetchArray(SQLITE3_ASSOC);
$nextmedia = $row["count(*)"];

$result=$db->query($otsql);
$row = $result->fetchArray(SQLITE3_ASSOC);
$other = $row["count(*)"];
 
$result=$db->query($nosql);
$row = $result->fetchArray(SQLITE3_ASSOC);
$nodata = $row["count(*)"];



$data=array($indihome,$firstmedia,$mnc,$Indovision,$biznet,$nextmedia,$other,$nodata);
// $bronzesql= "SELECT count(*) FROM clustel where TIPECLUSTER=/"sederhana/" ";
// $result=$db->query($bronzesql);
// $row = $result->fetchArray(SQLITE3_ASSOC);
// $bronze = $row["count(*)"];
    // $final = json_decode($final, true);
    // $new_final = array();
    // // simple flattening
    // foreach($final as $value) {
    //     foreach($value as $sub_value) {
    //         $new_final[] = $sub_value;
    //     }
    // }

    echo json_encode($data);
    exit;
?>