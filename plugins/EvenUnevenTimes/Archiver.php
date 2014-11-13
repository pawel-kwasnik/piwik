<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

namespace Piwik\Plugins\EvenUnevenTimes;
use Piwik\Metrics;
use Piwik\DataArray;
use Piwik\Date;

class Archiver extends \Piwik\Plugin\Archiver
{
    const UTC_TIME_RECORD_NAME = 'EvenUnevenTimes_utcTime';
    const VISITOR_TIME_RECORD_NAME = 'EvenUnevenTimes_visitorTime';
    
    const UTC_TIME_RECORD_FIELD = 'HOUR(log_visit.visit_last_action_time)';
    const VISITOR_TIME_RECORD_FIELD = 'HOUR(log_visit.visitor_localtime)';
    

    public function aggregateDayReport()
    {
        $this->aggregateByLabel(self::UTC_TIME_RECORD_FIELD, self::UTC_TIME_RECORD_NAME);
        $this->aggregateByLabel(self::VISITOR_TIME_RECORD_FIELD, self::VISITOR_TIME_RECORD_NAME);   
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
        $report = $this->getLogAggregator()->getMetricsFromVisitByDimension($labelSQL)->asDataTable()->getSerialized();
        $this->getProcessor()->insertBlobRecord($recordName, $report);
    }    

}
