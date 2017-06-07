<?php 
$db=new SQLite3('cluster.db');
$sql= "SELECT * FROM clustel ";
$result=$db->query($sql);
$idcluster=array();
while ($row = $result->fetchArray(SQLITE3_ASSOC)){

}
    $final = 40;
    // $final = json_decode($final, true);
    // $new_final = array();
    // // simple flattening
    // foreach($final as $value) {
    //     foreach($value as $sub_value) {
    //         $new_final[] = $sub_value;
    //     }
    // }

    echo json_encode($final);
    exit;
?>