<?php
class Elite_Vafimporter_TestCase extends Elite_Vaf_TestCase
{
    function getVehiclesListExport()
    {
        return new Elite_Vafimporter_Model_VehiclesList_CSV_Export;
    }
    
    function importVehiclesList($csvData)
    {
        $importer = $this->vehiclesListImporter($csvData);
        $importer->import();
        return $importer;
    }
    
    function vehiclesListImporter($csvData)
    {
        $file = TESTFILES . '/vehicles-list.csv';  
        file_put_contents( $file, $csvData );
        $importer = new Elite_Vafimporter_Model_VehiclesList_CSV_Import( $file );
        return $importer;
    }
}