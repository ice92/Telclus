<?php 
$db=new SQLite3('cluster.db');

$tsql= "SELECT count(*) FROM clustel";
$bsql= "SELECT count(*) FROM clustel where TIPERUMAH='Sangat Sederhana'";
$ssql= "SELECT count(*) FROM clustel where TIPERUMAH='Sederhana'";
$gsql= "SELECT count(*) FROM clustel where TIPERUMAH='Menengah'";
$psql= "SELECT count(*) FROM clustel where TIPERUMAH='Mewah'";
$asql= "SELECT count(*) FROM clustel where TIPERUMAH='Apartemen'";


$result=$db->query($tsql);
$row = $result->fetchArray(SQLITE3_ASSOC);
$total = $row["count(*)"];

$result=$db->query($bsql);
$row = $result->fetchArray(SQLITE3_ASSOC);
$bronze = round($row["count(*)"]/$total*100,2);

$result=$db->query($ssql);
$row = $result->fetchArray(SQLITE3_ASSOC);
$silver = round($row["count(*)"]/$total*100,2);

$result=$db->query($gsql);
$row = $result->fetchArray(SQLITE3_ASSOC);
$gold = round($row["count(*)"]/$total*100,2);

$result=$db->query($psql);
$row = $result->fetchArray(SQLITE3_ASSOC);
$platinum = round($row["count(*)"]/$total*100,2);

$result=$db->query($asql);
$row = $result->fetchArray(SQLITE3_ASSOC);
$apartemen = round($row["count(*)"]/$total*100,2);
$blank=100-($bronze+$silver+$gold+$platinum+$apartemen);
$blank=round($blank,2);
$data=array($bronze,$silver,$gold,$platinum,$apartemen,$blank);
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