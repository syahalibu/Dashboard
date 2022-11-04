<?php
include_once('../../../config/conn.php');

$sql_query = "SELECT nama, count(id_prov) as total
				FROM (SELECT tb_order_isds.id_prov, provinsi.nama
						FROM tb_order_isds
						INNER JOIN provinsi
							ON tb_order_isds.id_prov = provinsi.id_prov) AS tb
				GROUP BY nama";

$retval = $connect->query($sql_query);

while ($row = $row = $retval->fetch_assoc()) {
	$data_table[] = array(
		'nama' => $row['nama'],
		'total' => $row['total'],
	);
}

header("Content-type: application/json");
echo "{\"data\":" . json_encode($data_table) . "}";

$connect->close();
