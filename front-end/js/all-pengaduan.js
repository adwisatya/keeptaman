$.ajax({
	type: "GET",
	url: "../back-end/taman.php?command=6",
	success: function(data){
		$("#filter-option-taman").html(data);
	}
})

$.ajax({
	type: "GET",
	url: "../back-end/pengaduan.php?command=4",
	success: function(data){
		$("#list-pengaduan").html(data);
		$(".pengaduan").click(function(){
			var mydata = 'id_pengaduan=' + $(this).attr('id');
			$.ajax({
				type: "POST",
				url: "../back-end/pengaduan.php?command=5",
				data: mydata,
				success: function(data){
					$(".modal-body").html(data);
				}
			})	
		})
	}
})

$("#btn-filter").click(function(){
	var nama_taman = $("#sel-nama-taman").find(":selected").text();
	var status = $("#sel-status").find(":selected").val();
	var waktu_awal = $("#filter-option-waktu1").val();
	var waktu_akhir = $("#filter-option-waktu2").val();
	var mydata;
	var command;
	if($("#sel-nama-taman").find(":selected").val() != -1 && status != -1 && waktu_awal != "" && waktu_akhir != ""){
		mydata = "nama_taman=" + nama_taman + "&status=" + status + "&waktu_awal=" + waktu_awal + "&waktu_akhir=" + waktu_akhir;
		command = 12;
	}
	else if($("#sel-nama-taman").find(":selected").val() != -1 && status != -1){
		mydata = "nama_taman=" + nama_taman + "&status=" + status;
		command = 10;
	}
	else if($("#sel-nama-taman").find(":selected").val() != -1 && waktu_awal != "" && waktu_akhir != ""){
		mydata = "nama_taman=" + nama_taman +  "&waktu_awal=" + waktu_awal + "&waktu_akhir=" + waktu_akhir;
		command = 8;
	}
	else if(status != -1 && waktu_awal != "" && waktu_akhir != ""){
		mydata = "status=" + status + "&waktu_awal=" + waktu_awal + "&waktu_akhir=" + waktu_akhir;
		command = 11;
	}
	else if($("#sel-nama-taman").find(":selected").val() != -1){
		mydata = "nama_taman=" + nama_taman;
		command = 6;
	}
	else if(status != -1){
		mydata = "status=" + status;
		command = 9;
	}
	else if(waktu_awal != "" && waktu_akhir != ""){
		mydata = "waktu_awal=" + waktu_awal + "&waktu_akhir=" + waktu_akhir;
		command = 7;
	}
	//alert(mydata);
	$.ajax({
		type: "POST",
		url: "../back-end/pengaduan.php?command="+command,
		data: mydata,
		success: function(data){
			$("#list-pengaduan").html(data);
			$(".pengaduan").click(function(){
				var mydata = 'id_pengaduan=' + $(this).attr('id');
				$.ajax({
					type: "POST",
					url: "../back-end/pengaduan.php?command=5",
					data: mydata,
					success: function(data){
						$(".modal-body").html(data);
					}
				})	
			})
		}
	})
})