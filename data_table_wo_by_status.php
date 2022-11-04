<?php
include_once('../../../config/conn.php');

$sql_query = "SELECT tb_order_status_ev.status AS keterangan, COUNT(*) AS total
				FROM tb_order_ev
				INNER JOIN tb_order_status_ev ON tb_order_ev.status_ev_lq = tb_order_status_ev.id
				WHERE tb_order_status_ev.id IN(2, 3, 4, 5, 6, 7, 8, 9)
				GROUP BY tb_order_status_ev.status";

$retval = $connect->query($sql_query);

while ($row = $row = $retval->fetch_assoc()) {
	$data_table[] = array(
		'keterangan' => $row['keterangan'],
		'total' => $row['total'],
	);
}

header("Content-type: application/json");
echo "{\"data\":" . json_encode($data_table) . "}";

$connect->close();
