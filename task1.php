task1
<?php
$url = "http://ftp.geoinfo.msl.mt.gov/Documents/Metadata/GIS_Inventory/35524afc-669b-4614-9f44-43506ae21a1d.xml";
        $xml = simplexml_load_file($url);
        $json = json_encode($xml);
        print_r($json);
?>