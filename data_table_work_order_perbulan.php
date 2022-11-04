<?php
include_once('../../../config/conn.php');

$sql_query = "SELECT bulan, appointment, (@asum := @asum + appointment) AS akumulasi_appointment, pb_or_pd, 
						(@bsum := @bsum + pb_or_pd) AS akumulasi_pb_or_pd, instalasi, (@csum := @csum + instalasi) AS akumulasi_instalasi,
						selesai, (@dsum := @dsum + selesai) AS akumulasi_selesai
						FROM (SELECT bulan, COUNT(appointment) AS appointment, COUNT(pb_or_pd) AS pb_or_pd,
						@asum:= 0, @bsum:= 0, @csum:= 0, @dsum:= 0,
						COUNT(instalasi) AS instalasi, COUNT(selesai) AS selesai, created_date
						FROM (SELECT created_date, DATE_FORMAT(created_date, '%b') bulan,
								case 
									when status_ev_lq IN(2, 7, 8) then 'appointment'
									ELSE status_ev_lq = NULL END appointment,
								case 
									when status_ev_lq IN(4, 5, 6) then 'pb/pd'
									ELSE status_ev_lq = NULL END pb_or_pd,
								case 
									when status_ev_lq IN(3, 9) then 'instalasi'
									ELSE status_ev_lq = NULL END instalasi,
								case 
									when status_ev_lq = 10 then 'selesai'
									ELSE status_ev_lq = NULL END selesai		
							FROM tb_order_ev
							WHERE YEAR(created_date) = 2022) AS tb
						GROUP BY bulan
						ORDER BY created_date) AS tb
						GROUP BY bulan
						ORDER BY created_date";

$retval = $connect->query($sql_query);

while ($row = $row = $retval->fetch_assoc()) {
	$data_table[] = array(
		'bulan' => $row['bulan'],
		'appointment' => $row['appointment'],
		'pb_or_pd' => $row['pb_or_pd'],
		'instalasi' => $row['instalasi'],
		'selesai' => $row['selesai'],
		'ak_appointment' => $row['akumulasi_appointment'],
		'ak_pbpd' => $row['akumulasi_pb_or_pd'],
		'ak_instalasi' => $row['akumulasi_instalasi'],
		'ak_selesai' => $row['akumulasi_selesai'],
	);
}

header("Content-type: application/json");
echo "{\"data\":" . json_encode($data_table) . "}";

$connect->close();
