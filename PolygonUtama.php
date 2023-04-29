<?php
$kecamatan = [
    "DKIJakarta" => "#7FFFD4",
    "JakartaPusat" => "#FFF112",
    "JakartaBarat" => "#14F154",
    "JakartaUtara" => "#FF007F",
    "JakartaSelatan" => "#808000",
    "JakartaTimur" => "#8F00FF",
    "Bandung" => "#FF7F00"
    
];

?>
<!DOCTYPE html>
<html>

<head>
    <title>WebGIS GeoJson</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin="" />
    <link rel="stylesheet" href="assets/js/leaflet-panel-layers-master/src/leaflet-panel-layers.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/leaflet-search-master/dist/leaflet-search.min.css" />

    <style type="text/css">
        #mapid {
            height: 100vh;
        }

        .icon {
            display: inline-block;
            margin: 2px;
            height: 16px;
            width: 16px;
            background-color: #ccc;
        }

        .icon-bar {
            background: url('assets/js/leaflet-panel-layers-master/examples/images/icons/bar.png') center center no-repeat;
        }
    </style>
</head>

<body>
    <div id="mapid"></div>
</body>
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
<script src="assets/js/leaflet-search-master/dist/leaflet-search.src.js"></script>
<script src="assets/js/leaflet-panel-layers-master/src/leaflet-panel-layers.js"></script>
<script src="assets/js/leaflet.ajax.js"></script>

<script type="text/javascript">
    var mymap = L.map('mapid').setView([-6.210287681581123, 106.84084540472925], 12);

    var LayerKita = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });
    mymap.addLayer(LayerKita);

    var myStyle2 = {
        "color": "#ffff00",
        "weight": 1,
        "opacity": 0.9
    };

    //pop up bisa request data apa aja yang mau ditampilkan

    function popUp(f, l) {
     var out = [];
    if (f.properties) {

    out.push("Nama BUMN: " + f.properties['NamaBUMN']);
    out.push("Jenis: " + f.properties['Jenis']);
    out.push("Klaster Industri: " + f.properties['KlasterIndustri']);
    out.push("Rating: " + f.properties['Rating']);
    out.push("Website: " + f.properties['Website']);
    out.push("Rating: " + f.properties['Rating']);
    l.bindPopup(out.join("<br />"));
    }
    }

    //pemanggilan titik
    var titik = new L.GeoJSON.AJAX(["data/KelompokGis_Apotek.json"],{onEachFeature:popUp}).addTo(mymap);

    //pemanggilan search
    var poiLayers = L.layerGroup([
          titik
        ]);

        L.control.search({
            layer: poiLayers,
            initial: false,
            propertyName: 'NamaBUMN',
            buildTip: function(text, val) {
              var type = val.layer.feature.properties.KlasterIndustri;
              return '<a href="#" class="'+type+'">'+text+'<b>'+type+'</b></a>';
            }
          })
          .addTo(mymap);
    
          // fitur legenda
    function iconByName(name) {
        return '<i class="icon" style="background-color:' + name + '"></i>';
    }

    function featureToMarker(feature, latlng) {
        return L.marker(latlng, {
            icon: L.divIcon({
                className: 'marker-' + feature.properties.KECAMATAN,
                html: iconByName(feature.properties.KECAMATAN),
                iconUrl: '../images/medicine/ + '.png,
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            })
        });
    }

    var baseLayers = [{
        name: "",
        layer: LayerKita
    }];

     //untuk menampilin polygon 

        
    <?php
    foreach ($kecamatan as $key => $value) {
    ?>
            //untuk looping style dari legenda
        var myStyle<?= $key ?> = {
            "color": "<?= $value ?>",
            "weight": 1,
            "opacity": 1
        };


            //untuk pemanggilan geojson ke layer
    <?php
        $arrayKec[] = '{
			name: "' . str_replace('_', ' ', $key) . '",
			icon: iconByName("' . $value . '"),
			layer: new L.GeoJSON.AJAX(["assets/geojson/' . $key . '.geojson"],{onEachFeature:popUp,style: myStyle' . $key . ',pointToLayer: featureToMarker }).addTo(mymap)
			}';
    }
    ?>
        //memanggil layer yang tadi sudah diibuat

    var overLayers = [{
        group: "Filtering  Kecamatan",
        layers: [
            <?= implode(',', $arrayKec); ?>
        ]
    }];

        //menyimpan overlayer dan baselayers yang telah dibuat kedalam panel layers
    var panelLayers = new L.Control.PanelLayers(baseLayers, overLayers, {
        collapsibleGroups: true
    });

        //memasukkan panel layer yang telah dibuat kedalah map kita dengan cara di control
    mymap.addControl(panelLayers);
</script>

</html>