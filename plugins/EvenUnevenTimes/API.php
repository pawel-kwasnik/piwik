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
        // can use UTC or VISITOR time
        return $this->getDataTable(Archiver::UTC_TIME_RECORD_NAME, $idSite, $period, $date, $segment);                     
    }
 
}
