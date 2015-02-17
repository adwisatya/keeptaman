<?php
	require_once ('../lib/graph/src/jpgraph.php');
	require_once ('../lib/graph/src/jpgraph_pie.php');
	require_once ('../lib/graph/src/jpgraph_pie3d.php');
	
	require_once ('../connect.php');
	
	$id = $_GET["id"];
	
	$result = mysql_query("SELECT status, COUNT(status) AS jumlah FROM pengaduan WHERE id_taman = $id GROUP BY status");
	
	$datay1 = array();
	$datay2 = array();
	
	while($row = mysql_fetch_array($result)){
		array_push($datay1, $row['status']);
		array_push($datay2, $row['jumlah']);
	}
	if(empty($datay2[0]))
		$datay2[0] = 0;
		
	if(empty($datay2[1]))
		$datay2[1] = 0;
	
	$data = array($datay2[0], $datay2[1]);
	
 
	$graph = new PieGraph(300,200);
	$graph->SetShadow();
	 
	$graph->title->Set("Jumlah pengaduan");
	$graph->title->SetFont(FF_FONT1,FS_BOLD);
	 
	$p1 = new PiePlot3D($data);
	$p1->SetAngle(20);
	$p1->SetSize(0.5);
	$p1->SetCenter(0.45);
	$p1->SetLegends(array("belum", "sudah"));
	 
	$graph->Add($p1);
	$graph->Stroke();
?>