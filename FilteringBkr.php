<div id="popup" class="ol-popup">
        <a href="#" id="popup-closer" class="ol-popup-closer"></a>
        <div id="popup-content"></div>
    </div>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.9.0/css/ol.css" type="text/css">

  <style>
    .map {
      height: 1000px;
      width: 100%;
    }
  </style>
  <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.9.0/build/ol.js"></script>
  <title>OpenLayers example</title>
</head>

<body>
  <h2>My Map</h2>
  <div id="map" class="map"></div>

  //untuk pop up informasi
  <div id="popup" class="ol-popup">
    <a href="#" id="popup-closer" class="ol-popup-closer"></a>
    <div id="popup-content"></div>
  </div>
  <a href="#" id="popup-closer" class="ol-popup-closer"></a>
  <div id="popup-content"></div>

  </div>


  <script type="text/javascript">
    //titik filtering kecamatan
    var VectorLayers = new ol.layer.Vector({ //buat objek Vector Layer
      source: new ol.source.Vector({
        format: new ol.format.GeoJSON(),
        url: 'data/filteringKecBkr.geojson' //path data JSON
      }),
      style: new ol.style.Style({
        image: new ol.style.Icon(({
          anchor: [0.5, 46],
          anchorXUnits: 'fraticon',
          anchorYUnits: 'pixels',
          src: 'icon/medicine.png' //path data icon
        }))
      })
    });


    // polygon kecamatan
    var VectorLayersRiau = new ol.layer.Vector({ //buat objek Vector Layer
      source: new ol.source.Vector({
        format: new ol.format.GeoJSON(),
        url: 'assets/geojson/DKIJakarta.geojson' //path data JSON
      }),

    });

    var map = new ol.Map({
      target: 'map',
      layers: [
        new ol.layer.Tile({
          source: new ol.source.OSM()
        }), VectorLayersRiau, VectorLayers // menampilkan layer yang di butuhkan
      ],
      view: new ol.View({
        center: ol.proj.fromLonLat([-6.210287681581123, 106.84084540472925]), //titik awal
        zoom: 11 // perbesaran
      })
    });
  </script>
  <!-- Pop Up -->
  <script type="text/javascript">
        var container = document.getElementById('popup'),
        content_element = document.getElementById('popup-content'),
        closer= document.getElementById('popup-closer');

        closer.onclick=function(){
            overlay.setPosition(undefined);
            closer.blur();
            return false;
        }
        var overlay= new ol.Overlay({
            element:container,
            autoPan:true,
            offset:[0,-10]
        });
        map.addOverlay(overlay);

        var FullScreen = new ol.control.FullScreen();
        map.addControl(FullScreen);
        map.on('click',function(evt){
            var feature = map.forEachFeatureAtPixel(evt.pixel,
            function(feature,layer){
                return feature;
            });
            if(feature){
                var geometry=feature.getGeometry();
                var coord = geometry.getCoordinates();
                var content ='<h5>Nama BUMN : '+feature.get('NamaBUMN')+'</h5><br/>';
                content +='<h5>Jenis : '+feature.get('Jenis')+' </h5>';
                content +='<h5>Klaster Industri : '+feature.get('KlasterIndustri')+'</h5>';
                content +='<h5>Rating : '+feature.get('Rating')+'</h5>';
                content +='<h5>Website: '+feature.get('Website')+'</h5>';
                content +='<img src="'+feature.get('LinkFoto')+'" class="foto" width="200"  alt=""/>';

                content_element.innerHTML=content;
                overlay.setPosition(coord);
                console.info(feature.getProperties());
            }
        })
    </script>
</body>

</html>