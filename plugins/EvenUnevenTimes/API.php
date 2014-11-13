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
use Piwik\DataTable;
use Piwik\DataTable\Row;
use Piwik\Archive;

/**
 * API for plugin EvenUnevenTimes
 *
 * @method static \Piwik\Plugins\EvenUnevenTimes\API getInstance()
 */
class API extends \Piwik\Plugin\API
{
      
    /**
     * @param string $name
     * @param int $idSite
     * @param string $period
     * @param string $date
     * @param string $segment
     * @return DataTable
     */
    protected function getDataTable($name, $idSite, $period, $date, $segment)
    {
        Piwik::checkUserHasViewAccess($idSite);
        $archive = Archive::build($idSite, $period, $date, $segment);   
        $dataTable = $archive->getDataTable($name);
        $dataTable->queueFilter('ReplaceColumnNames');
        return $dataTable;
    }    
    
    
    /**
     * Method returning number of visits grouped by even and uneven hour of visit.
     * @param int    $idSite
     * @param string $period
     * @param string $date
     * @param bool|string $segment
     * @return DataTable
     */
    public function getEvenUnevenTimesReport($idSite, $period, $date, $segment = false) 
    {


        // get data in relation to visit hour - using VisitTime plugin
//        $data = \Piwik\Plugins\VisitTime\API::getInstance()->getVisitInformationPerServerTime(
//            $idSite, $period, $date, $segment
//        );   

        // get data in relation to visit hour using own archiver
        // use 'EvenUnevenTimes_utcTime' or 'EvenUnevenTimes_visitorTime'
        $data = $this->getDataTable('EvenUnevenTimes_utcTime', $idSite, $period, $date, $segment);
        $data->applyQueuedFilters();
        
        // we could create a new instance by using new DataTable(),
        // but we would loose DataTable metadata, which can be useful.        
        $result = $data->getEmptyClone($keepFilters = false);      
        $rows=array('Even'=>0, 'Uneven'=>0);

        // increment visits counter for even end uneven hour of visit
        foreach ($data->getRows() as $visitRow) {
            $nb_visits = $visitRow->getColumn('nb_visits');
            if((int)$visitRow->getColumn('label') % 2 == 0) {
                $rows['Even'] += $nb_visits;
            } else {
                $rows['Uneven'] += $nb_visits;
            }
        }
        
        // insert data from array with counters to return object (DataTable)
        foreach($rows as $label=>$nb_visits) {
            $result->addRowFromSimpleArray(array(
                'label'     => Piwik::translate("EvenUnevenTimes_{$label}"),
                'nb_visits' => $nb_visits
            ));            
        }
        return $result;                     
    }
 
}
