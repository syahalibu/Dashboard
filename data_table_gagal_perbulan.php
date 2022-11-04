<?php
include_once('../../../config/conn.php');

$sql_query = "SELECT bulan, total, (@csum := (@csum + total)) as akumulasi
				FROM (SELECT bulan, COUNT(id) AS total, created_date, @csum := 0
					FROM (SELECT tb_order_ev.created_date, DATE_FORMAT(created_date, '%b') bulan, id, tb_order_status_ev.status
					FROM tb_order_ev
					INNER JOIN tb_order_status_ev ON tb_order_ev.status_ev_lq = tb_order_status_ev.id
					WHERE tb_order_ev.status_ev_lq IN(-1, -2, -3, -4, -5) 
						AND YEAR(created_date) = 2022 ) AS tb
					GROUP BY bulan
					ORDER BY created_date) AS tb
				GROUP BY bulan
				ORDER BY created_date";

$retval = $connect->query($sql_query);

while ($row = $row = $retval->fetch_assoc()) {
	$data_table[] = array(
		'bulan' => $row['bulan'],
		'total' => $row['total'],
		'akumulasi' => $row['akumulasi'],
	);
}

header("Content-type: application/json");
echo "{\"data\":" . json_encode($data_table) . "}";

$connect->close();
