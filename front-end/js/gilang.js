$("#submit_pengaduan").click(function(){
	var nama = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var subjek = document.getElementById("subjek").value;
	var isi = document.getElementById("isi").value;
	//alert("nama=" + nama + "email=" + email + "subjek=" + subjek + "isi=" + isi);
	if(nama == "" || email == "" || subjek == "" || isi == ""){
		alert("Form belum lengkap");
	}else{
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
		$(".portfolio-modal").modal('hide');
	}
});

$.ajax({
	type: "GET",
	url: "../back-end/taman.php?command=7",
	success: function(data){
		$("#nama-taman").html(data);
        $("#nama-taman p").css("background-color", "#90b973");
        $("#taman0").css("background-color", "#2f7e61");
		jQuery('#nama-taman p').click(function(){
          var str = "" + this.id;
          var id = str.substr(5,5);
          $("#nama-taman p").css("background-color", "#90b973");
          $("#taman"+id).css("background-color", "#2f7e61");
          $("#gambar-statistic").attr("src", "../back-end/statistik.php?id=" +  $("#var-id-taman"+id).text())
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
		$("#gambar-statistic").attr("src", "../back-end/statistik.php?id=" +  $("#var-id-taman0").text());
	}
})

$.ajax({
	type: "GET",
	url: "../back-end/pengaduan.php?command=13",
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