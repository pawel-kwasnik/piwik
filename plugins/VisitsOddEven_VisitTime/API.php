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
    public function getVisitsOddEvenReport($idSite, $period, $date, $segment = false) {

        $data = \Piwik\Plugins\VisitTime\API::getInstance()->getVisitInformationPerLocalTime(
            $idSite,
            $period,
            $date,
            $segment
        );          
        $data->applyQueuedFilters();
        $result = $data->getEmptyClone($keepFilters = false);      

        $rows=array('Even'=>0, 'Uneven'=>0);
        foreach ($data->getRows() as $visitRow) {
            $nb_visits = $visitRow->getColumn('nb_visits');
            if((int)$visitRow->getColumn('label') % 2 == 0) {
                $rows['Even'] += $nb_visits;
            } else {
                $rows['Uneven'] += $nb_visits;
            }
        }

        foreach($rows as $key=>$nb_visits) {
            $result->addRowFromSimpleArray(array(
                'label'     => $key,
                'nb_visits' => $nb_visits
            ));            
        }
          
        return $result;                  
    }
    
    
    
}
