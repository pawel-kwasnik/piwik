<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

namespace Piwik\Plugins\EvenUnevenTimes;
use Piwik\Piwik;
use Piwik\Metrics;
use Piwik\DataTable;
//use Piwik\DataArray;
//use Piwik\Date;
//use Piwik\DataTable\Row;


class Archiver extends \Piwik\Plugin\Archiver
{
    const UTC_TIME_RECORD_NAME = 'EvenUnevenTimes_utcTime';
    const VISITOR_TIME_RECORD_NAME = 'EvenUnevenTimes_visitorTime';
    

    public function aggregateDayReport()
    {
        $this->aggregateByLabel('HOUR(log_visit.visit_last_action_time)', self::UTC_TIME_RECORD_NAME);
        $this->aggregateByLabel('HOUR(log_visit.visitor_localtime)', self::VISITOR_TIME_RECORD_NAME);   
    }
    
    public function aggregateMultipleReports()
    {
        $dataTablesToSum = array(
            self::UTC_TIME_RECORD_NAME,
            self::VISITOR_TIME_RECORD_NAME,
        );
        foreach ($dataTablesToSum as $dt) {
            $this->getProcessor()->aggregateDataTableRecords($dt);
        }        
    }
    
    private function aggregateByLabel($labelSQL, $recordName)
    {        
        $data = $this->getLogAggregator()->getMetricsFromVisitByDimension($labelSQL)->asDataTable();
                
        // prepare simple array
        $parityArray=array( 
            array( 'label' => Piwik::translate("EvenUnevenTimes_Uneven"), 'nb_visits' => 0), 
            array( 'label' => Piwik::translate("EvenUnevenTimes_Even"), 'nb_visits' => 0), 
        );
        
        // increment visits counter for even end uneven hour of visit
        foreach($data->getRows() as $visitRow) {
            // check parity of hour; 0 for uneven, 1 for even
            $parity=(int)((int)$visitRow->getColumn('label') % 2 == 0);
            $parityArray[$parity]['nb_visits'] += $visitRow->getColumn(Metrics::INDEX_NB_VISITS);
        }
        
        $dataTable = new DataTable();
        $dataTable->addRowsFromSimpleArray($parityArray);      
        $this->getProcessor()->insertBlobRecord($recordName, $dataTable->getSerialized());
    }    

}
