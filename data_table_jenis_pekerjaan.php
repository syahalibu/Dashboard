<?php
include_once('../../../config/conn.php');

$sql_query = "SELECT case when jenis_pekerjaan IS NULL OR jenis_pekerjaan = '' then 'EXS'
				ELSE jenis_pekerjaan END jenis_pekerjaan, COUNT(*) total
				FROM tb_order_ev
				GROUP BY case when jenis_pekerjaan IS NULL OR jenis_pekerjaan = '' then 'EXS'
				ELSE jenis_pekerjaan END 
				ORDER BY total";

$retval = $connect->query($sql_query);

while ($row = $row = $retval->fetch_assoc()) {
	$data_table[] = array(
		'jenis_pekerjaan' => $row['jenis_pekerjaan'],
		'total' => $row['total'],
	);
}

header("Content-type: application/json");
echo "{\"data\":" . json_encode($data_table) . "}";

$connect->close();
