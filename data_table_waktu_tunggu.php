<?php
include_once('../../../config/conn.php');

$sql_query = "SELECT bulan, FLOOR(AVG(wt)) AS rata2, MAX(wt) AS maksimum
				FROM (SELECT tgl_appointment, tgl_callback,
							DATE_FORMAT(tgl_appointment, '%b') AS bulan,
							DATEDIFF(tgl_appointment, tgl_callback) AS wt
						FROM tb_order_ev
						WHERE YEAR(tgl_appointment) = 2022) AS selisih
				GROUP BY bulan
				ORDER BY tgl_appointment";

$retval = $connect->query($sql_query);

while ($row = $row = $retval->fetch_assoc()) {
	$data_table[] = array(
		'bulan' => $row['bulan'],
		'rata2' => $row['rata2'],
		'max' => $row['maksimum'],
	);
}

header("Content-type: application/json");
echo "{\"data\":" . json_encode($data_table) ."}";

$connect->close();
