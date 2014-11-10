<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\VisitsOddEven;

use Piwik\DataTable;
use Piwik\DataTable\Row;

/**
 * API for plugin VisitsOddEven
 *
 * @method static \Piwik\Plugins\VisitsOddEven\API getInstance()
 */
class API extends \Piwik\Plugin\API
{

    /**
     * Another example method that returns a data table.
     * @param int    $idSite
     * @param string $period
     * @param string $date
     * @param bool|string $segment
     * @return DataTable
     */
    public function getVisitsOddEvenReport($idSite, $period, $date, $segment = false)
    {

        
//$data =     $data = \Piwik\Plugins\VisitTime\API::getInstance()->getVisitInformationPerLocalTime(
//        $idSite,
//        $period,
//        $date,
//        $segment
//        );
//        
//$a=$data->getRows();
//
//echo "<pre>";
//   die(var_dump($a  ));     
        
    $data = \Piwik\Plugins\Live\API::getInstance()->getLastVisitsDetails(
        $idSite,
        $period,
        $date,
        $segment,
        $numLastVisitorsToFetch = 9999,
        $minTimestamp = false,
        $flat = false,
        $doNotFetchActions = true
    );
    
    
    
    $data->applyQueuedFilters();

    // we could create a new instance by using new DataTable(),
    // but we would loose DataTable metadata, which can be useful.
    $result = $data->getEmptyClone($keepFilters = false);

    foreach ($data->getRows() as $visitRow) {
        
//        echo "<pre>"; die(var_dump($visitRow));
        
              
        
        if((int)$visitRow->getColumn('visitLocalHour') % 2 == 0) 
            $hour='Even';
        else 
            $hour='Uneven';
        
        // try and get the row in the result DataTable for the browser
        $browserRow = $result->getRowFromLabel($hour);

        // if there is no row for this browser, create it
        if ($browserRow === false) {
            $result->addRowFromSimpleArray(array(
                'label'     => $hour,
                'nb_visits' => 1
            ));
        } else { // if there is a row, increment the counter
            $counter = $browserRow->getColumn('nb_visits');
            $browserRow->setColumn('nb_visits', $counter + 1);
        }
    }

    return $result;          
        
        
        
        
        
//        $table = new DataTable();
//
//        $table->addRowFromArray(array(Row::COLUMNS => array('nb_visits' => 5)));
//
//        return $table;
    }
}
