$("#submit_pengaduan").click(function(){
	var file = document.getElementById('image-upload').files[0];
	var formData = new FormData();
	var filename;
	if(file != null){
		filename = file.name;
		formData.append('image-upload', file, filename);
		var xhr = new XMLHttpRequest();
	    xhr.open('post', 'upload-image.php', true);
	    xhr.send(formData);
	}

	var newdata = 'id_taman='+selected_taman_id+'&nama='+ $("#name").val()+'&email='+ $("#email").val()+
				'&subjek='+ $("#subjek").val()+ '&isi='+ $("#isi").val() + '&filename=' +'image/'+filename;
	//alert(newdata);
	$.ajax({
		type: "POST",
		url: "../back-end/pengaduan.php?command=1",
		data: newdata,
		success: function(data){
			alert("Pengaduan telah ditambahkan");
		},
		error: function(){
			alert("error submit pengaduan");
		}
	});
	var txt = "";
	document.getElementById("name").value = txt;
	document.getElementById("email").value = txt;
	document.getElementById("subjek").value = txt;
	document.getElementById("isi").value = txt;
});

$.ajax({
	type: "GET",
	url: "../back-end/taman.php?command=7",
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

$.ajax({
	type: "GET",
	url: "../back-end/taman.php?command=3",
	success: function(data){
		$("#var-container-div").html(data);
	}
})

$.ajax({
	type: "GET",
	url: "../back-end/taman.php?command=4",
	success: function(data){
		$("#var-nama-taman-div").html(data);
	}
})

$.ajax({
	type: "GET",
	url: "../back-end/taman.php?command=5",
	success: function(data){
		$("#var-id-taman-div").html(data);
	}
})