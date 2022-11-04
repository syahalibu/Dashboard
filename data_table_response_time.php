<?php
include_once('../../../config/conn.php');

$sql_query = "SELECT bulan, AVG(rst) AS rata2, MAX(rst) AS maksimum
				FROM (SELECT created_date, tgl_callback, 
							DATE_FORMAT(created_date, '%b') AS bulan,
							DATEDIFF(tgl_callback, created_date) AS rst
							FROM tb_order_ev
							WHERE YEAR(created_date) = 2022) AS selisih
				GROUP BY bulan
				ORDER BY created_date";

$retval = $connect->query($sql_query);

while ($row = $row = $retval->fetch_assoc()) {
	$data_table[] = array(
		'bulan' => $row['bulan'],
		'rata2' => $row['rata2'],
		'max' => $row['maksimum'],
	);
}

header("Content-type: application/json");
echo "{\"data\":" . json_encode($data_table) . "}";

$connect->close();
