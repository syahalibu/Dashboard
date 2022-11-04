<?php
include_once('../../../config/conn.php');

$sql_query = "SELECT nama, COUNT(tb.status_ev_lq) AS jumlah
				FROM (SELECT tb_order_ev.status_ev_lq, petugas_id, tb_petugas.nama
						FROM tb_order_ev
						INNER JOIN tb_petugas ON tb_order_ev.petugas_id = tb_petugas.id_petugas
						WHERE status_ev_lq IN(-1, -2, -3, -4, -5) AND petugas_id IS NOT NULL) AS tb
				GROUP BY tb.petugas_id
				ORDER BY jumlah DESC
				LIMIT 10";

$retval = $connect->query($sql_query);

while ($row = $row = $retval->fetch_assoc()) {
	$data_table[] = array(
		'nama_petugas' => $row['nama'],
		'jumlah' => $row['jumlah'],
	);
}

header("Content-type: application/json");
echo "{\"data\":" . json_encode($data_table) . "}";

$connect->close();
