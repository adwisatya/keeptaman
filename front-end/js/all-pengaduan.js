$.ajax({
	type: "GET",
	url: "../admin/taman.php?command=6",
	success: function(data){
		$("#filter-option-taman").html(data);
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