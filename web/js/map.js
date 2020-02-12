    var customLabel = {
        PetrolStation: {
          label: 'P'
        },
        RefillingStation: {
          label: 'R'
        }
      };

        function initMap() {
       	 var map = new google.maps.Map(document.getElementById('map'),
			{
       center: new google.maps.LatLng(-1.3031934,36.5672003),     
          zoom: 12,

          // styles: [          
          // ]
        });
        var infoWindow = new google.maps.InfoWindow;
       // var baseUrl = "map.xml";
        var baseUrl = "https://192.168.230.101:8440/map.xml";
	//var baseUrl = "http://34.66.156.16/authapp/backend/web/map.xml";
       
        //var baseUrl = 'https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml';
       
       // Change this depending on the name of your PHP or XML file
         // downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
        downloadUrl(baseUrl, function(data) 
         {
            var xml = data.responseXML;
            //console.log("DATA~~"+xml);   
             //console.log(document.body);     
           
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}

 
