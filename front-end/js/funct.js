	function initPost(){
			var nama = document.getElementById('nama_taman').value;
			var alamat = document.getElementById('alamat').value;
			var geolokasi = document.getElementById('geolokasi').value;
			var idadmin = document.getElementById('idadmin').value;
			if(nama && alamat && geolokasi && idadmin){
				TambahTaman();
			}else{
				alert('isi dengan benar');
			}
		}
		function TambahTaman(){
			var nama = document.getElementById('nama_taman').value;
			var alamat = document.getElementById('alamat').value;
			var geolokasi = document.getElementById('geolokasi').value;
			var idadmin = "admin";
			//var idadmin = document.getElementById('idadmin').value;
			var id_taman = 123232;
			var xmlhttp=GetXmlHttpObject();
			if(xmlhttp==null){
				alert("Silahkan gunakan browser yang mendukung AJAX");
				return;
			}	
			var url	=	"../admin/taman-aryya.php?command=0";
			var param = "id_taman="+id_taman+
				"&nama="+nama+
				"&alamat="+alamat+
				"&geolokasi="+geolokasi+
				"&idadmin="+idadmin;
			xmlhttp.open("POST",url,true);
			xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlhttp.setRequestHeader("Content-length", param.length);
			xmlhttp.setRequestHeader("Connection", "close");
			xmlhttp.send(param);
			alert('selesai');
		}
		function UpdateTaman(){
			var nama = document.getElementById('nama_taman').value;
			var alamat = document.getElementById('alamat').value;
			var geolokasi = document.getElementById('geolokasi').value;
			var idadmin = document.getElementById('idadmin').value;
			//var idadmin = document.getElementById('idadmin').value;
			var id_taman = document.getElementById('id_taman').innerHTML;
			var xmlhttp=GetXmlHttpObject();
			if(xmlhttp==null){
				alert("Silahkan gunakan browser yang mendukung AJAX");
				return;
			}	
			var url	=	"../admin/taman-aryya.php?command=2";
			var param = "id_taman="+id_taman+
				"&nama="+nama+
				"&alamat="+alamat+
				"&geolokasi="+geolokasi+
				"&idadmin="+idadmin;
			xmlhttp.open("POST",url,true);
			xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlhttp.setRequestHeader("Content-length", param.length);
			xmlhttp.setRequestHeader("Connection", "close");
			xmlhttp.send(param);
			alert('Data taman telah diupdate');
			window.location.href = "edit-taman.php?id="+id_taman;
		}
		function HapusTaman(){
			var id_taman = document.getElementById('id_taman').value;
			var xmlhttp=GetXmlHttpObject();
			if(xmlhttp==null){
				alert("Silahkan gunakan browser yang mendukung AJAX");
				return;
			}	
			var url	=	"../admin/taman-aryya.php?command=1";
			var param = "id_taman="+id_taman;
			xmlhttp.open("POST",url,true);
			xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlhttp.setRequestHeader("Content-length", param.length);
			xmlhttp.setRequestHeader("Connection", "close");
			xmlhttp.send(param);
		}
		function GetXmlHttpObject() {
			var xmlhttp=null;
			try {
				// Firefox, Opera 8.0+, Safari
				xmlhttp=new XMLHttpRequest();
			}
			catch (e) {
				// Internet Explorer
				try {
					xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch (e) {
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
			}
			return xmlhttp;
		}
		function show_add_taman(){
			 document.getElementById("tambah_taman").style = "display";
		}
		function getCheckedList(){
			var checkboxes = document.getElementsByName('checked_id_pengaduan');
			for(var i=0, n=checkboxes.length; i<n;i++){
				if(checkboxes[i].checked){
					alert(i);
				}
			}
		}