<?php
include_once('../../../config/conn.php');

$sql_query = "SELECT case 
						when status_idpel IS NULL OR status_idpel = '' then 'NON PB/PD'
						when status_idpel = 'TANPA TAMBAH DAYA' then 'NON PB/PD'
						when status_idpel = 'TAMBAH DAYA' then 'PD'
						when status_idpel = 'PASANG BARU' then 'PB'
				ELSE status_idpel END status_idpel, COUNT(*) as total
				FROM tb_order_ev
				GROUP BY case 
							when status_idpel IS NULL OR status_idpel = '' then 'NON PB/PD'
							when status_idpel = 'TANPA TAMBAH DAYA' then 'NON PB/PD'
							when status_idpel = 'TAMBAH DAYA' then 'PD'
							when status_idpel = 'PASANG BARU' then 'PB'
				ELSE status_idpel END
				ORDER BY created_date";

$retval = $connect->query($sql_query);

while ($row = $row = $retval->fetch_assoc()) {
	$data_table[] = array(
		'status_idpel' => $row['status_idpel'],
		'total' => $row['total'],
	);
}

header("Content-type: application/json");
echo "{\"data\":" . json_encode($data_table) . "}";

$connect->close();
