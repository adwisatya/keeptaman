
      function initialize() {
        var mapCanvas = document.getElementById('google-map');
        var mapOptions = {
          center: new google.maps.LatLng(-6.893271, 107.610266),
          zoom: 13,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);
        $(".geo").each(function(index){
            var loc = $(this).text().split(",");
            var marker = new google.maps.Marker({
              position: new google.maps.LatLng(loc[0], loc[1]),
              map: map,
              title: $("#var-nama-taman"+index).text()
            });
            google.maps.event.addListener(marker, 'click', function(){
                selected_taman_id = $("#var-id-taman" + index).text();
                alert($("#var-id-taman" + index).text());
                $("#add-pengaduan").modal('show');
            })
        });
      }
      google.maps.event.addDomListener(window, 'load', initialize);