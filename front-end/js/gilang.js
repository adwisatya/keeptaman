$("#submit_pengaduan").click(function(){
	var newdata = 'nama='+ $("#name").val()+'&email='+ $("#email").val()+
				'&subjek='+ $("#subjek").val()+ '&isi='+ $("#isi").val();
	alert(newdata);
	$.ajax({
		type: "POST",
		url: "../admin/pengaduan.php?command=1",
		data: newdata,
		success: function(data){
			alert(data);
		},
		error: function(){
			alert("error submit pengaduan");
		}
	});
});

$.ajax({
	type: "GET",
	url: "../admin/taman.php",
	success: function(data){
		$("#nama-taman").html(data);
		jQuery('#nama-taman p').click(function(){
          var jumTaman = 16;
          var str = "" + this.id;
          var id = str.substr(5,5);
          //alert(str.substr(5,5));
          $("#list-taman img").hide();
          $("#nama-taman p").css("background-color", "#90b973");
          $("#gambar-statistik"+id).show();
          $("#taman"+id).css("background-color", "#2f7e61");
        });
	},
	error: function(){
		alert("error fetch taman");
	}
})
