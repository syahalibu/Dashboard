<?php
include_once('../../../config/conn.php');

$sql_query = "SELECT DATE_FORMAT(tgl_order,'%b') AS bulan, COUNT(wo_gagal) AS wo_gagal,
				COUNT(on_progress) AS on_progress, COUNT(selesai) AS selesai
				FROM (SELECT tgl_order,status_id,
				case 
					when status_id IN (-1,-2,-3,-4) then 'WO gagal'
				ELSE status_id = NULL END wo_gagal,
				case 
					when status_id IN (1,2,3,4) then 'On Progres'
				ELSE status_id = NULL END on_progress,
				case 
					when status_id IN (99) then 'Selesai'
				ELSE status_id = NULL END selesai
				FROM tb_order_isds) AS tb
				WHERE YEAR (tgl_order)= 2022
				GROUP BY bulan
				ORDER BY tgl_order";

$retval = $connect->query($sql_query);

while ($row = $row = $retval->fetch_assoc()) {
	$data_table[] = array(
		'bulan' => $row['bulan'],
		'wo_gagal' => $row['wo_gagal'],
		'on_progress' => $row['on_progress'],
		'selesai' => $row['selesai'],
	);
}

header("Content-type: application/json");
echo "{\"data\":" . json_encode($data_table) . "}";

$connect->close();
