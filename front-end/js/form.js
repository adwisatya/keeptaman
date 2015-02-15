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
			alert("error");
		}
	});
});