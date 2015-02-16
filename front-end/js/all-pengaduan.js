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
// $("#btn-filter").click(function(){
// 	$.ajax({
// 		type:
// 		url:
// 		success: function(data){

// 		}
// 	})
// })