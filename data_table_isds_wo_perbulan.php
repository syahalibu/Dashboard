<?php
include_once('../../../config/conn.php');

$sql_query = "SELECT DATE_FORMAT(tgl_order, '%b') AS bulan, COUNT(status_id) AS total
				FROM tb_order_isds
				WHERE YEAR(tgl_order) = 2022
				GROUP BY bulan
				ORDER BY tgl_order";

$retval = $connect->query($sql_query);

while ($row = $row = $retval->fetch_assoc()) {
	$data_table[] = array(
		'bulan' => $row['bulan'],
		'total' => $row['total'],
	);
}

header("Content-type: application/json");
echo "{\"data\":" . json_encode($data_table) . "}";

$connect->close();
