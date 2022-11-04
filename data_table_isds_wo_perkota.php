<?php
include_once('../../../config/conn.php');

$sql_query = "SELECT nama_kota, COUNT(*) AS total
				FROM (SELECT id_prov,
						case 
							when nama_kota IS NULL then 'Unknown'
							when nama_kota = '' then 'Unknown'
						ELSE nama_kota END nama_kota
						FROM tb_order_isds) tb
				GROUP BY nama_kota";

$retval = $connect->query($sql_query);

while ($row = $row = $retval->fetch_assoc()) {
	$data_table[] = array(
		'kota' => $row['nama_kota'],
		'total' => $row['total'],
	);
}

header("Content-type: application/json");
echo "{\"data\":" . json_encode($data_table) . "}";

$connect->close();
