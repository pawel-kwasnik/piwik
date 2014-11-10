<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link    http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */
namespace Piwik\Tests\System;

use Piwik\Plugins\Goals\Archiver;
use Piwik\Tests\Framework\TestCase\SystemTestCase;
use Piwik\Tests\Fixtures\TwoSitesTwoVisitorsDifferentDays;

require_once PIWIK_INCLUDE_PATH . '/plugins/Goals/Goals.php';

/**
 * Same as TwoVisitors_twoWebsites_differentDays but with goals that convert
 * on every url.
 *
 * @group TwoVisitorsTwoWebsitesDifferentDaysConversionsTest
 * @group TwoSitesTwoVisitorsDifferentDays
 * @group Plugins
 */
class TwoVisitorsTwoWebsitesDifferentDaysConversionsTest extends SystemTestCase
{
    public static $fixture = null; // initialized below class definition

    /**
     * @dataProvider getApiForTesting
     */
    public function testApi($api, $params)
    {
        $this->runApiTests($api, $params);
    }

    public function getApiToCall()
    {
        return array('Goals.getDaysToConversion',
                     'MultiSites.getAll'
        );
    }

    public function getApiForTesting()
    {
        $dateTime = self::$fixture->dateTime;
        $idSite1 = self::$fixture->idSite1;

        // NOTE: copied from TwoVisitors_TwoWebsites_DifferentDays (including the test or inheriting means
        // the test will get run by phpunit, even when we only want to run this one. should be put into
        // non-test class later.)
        $apiToCall = $this->getApiToCall();
        $singlePeriodApi = array('VisitsSummary.get', 'Goals.get');

        $periods = array(
                'day',
                'week',
                'month',
                'year'
        );

        $result = array();

        // Live output for a quick visualisation if some other API test break
        $result[] = array(
            'Live.getLastVisitsDetails', array(
                'idSite' => self::$fixture->idSite1,
                'date' => $dateTime,
                'periods' => 'year',
                'keepLiveDates' => true,
                'otherRequestParameters' => array('showColumns' => 'lastActionDateTime,referrerType,referrerName,actions,events,visitConverted'),
            ));

        // Request data for the last 6 periods and idSite=all
        $result[] = array($apiToCall, array('idSite'       => 'all',
                                    'date'         => $dateTime,
                                    'periods'      => $periods,
                                    'setDateLastN' => true
        ));

        // Request data for the last 6 periods and idSite=1
        $result[] = array($apiToCall, array('idSite'       => $idSite1,
                                    'date'         => $dateTime,
                                    'periods'      => $periods,
                                    'setDateLastN' => true,
                                    'testSuffix'   => '_idSiteOne_'
        ));

        // We also test a single period to check that this use case (Reports per idSite in the response) works
        $result[] = array($singlePeriodApi, array('idSite'       => 'all',
                                          'date'         => $dateTime,
                                          'periods'      => array('day', 'month'),
                                          'setDateLastN' => false,
                                          'testSuffix'   => '_NotLastNPeriods'
        ));

        // testing metadata API for multiple periods
        $apiToCall = array_diff($apiToCall, array('Actions.getPageTitle', 'Actions.getPageUrl'));
        foreach ($apiToCall as $api) {
            list($apiModule, $apiAction) = explode(".", $api);

            $result[] = array(
                'API.getProcessedReport', array('idSite'       => $idSite1,
                                                'date'         => $dateTime,
                                                'periods'      => array('day'),
                                                'setDateLastN' => true,
                                                'apiModule'    => $apiModule,
                                                'apiAction'    => $apiAction,
                                                'testSuffix'   => '_' . $api . '_firstSite_lastN')
            );
        }

        // Tests that getting a visits summary metric (nb_visits) & a Goal's metric (Goal_revenue)
        // at the same time works.
        $dateTimeRange = '2010-01-03,2010-01-06';
        $columns = 'nb_visits,' . Archiver::getRecordName('conversion_rate');

        $result[] = array(
            'VisitsSummary.get', array('idSite'                 => 'all', 'date' => $dateTimeRange, 'periods' => 'range',
                                       'otherRequestParameters' => array('columns' => $columns),
                                       'testSuffix'             => '_getMetricsFromDifferentReports')
        );


        return $result;
    }

    public static function getOutputPrefix()
    {
        return 'TwoVisitors_twoWebsites_differentDays_Conversions';
    }
}

TwoVisitorsTwoWebsitesDifferentDaysConversionsTest::$fixture = new TwoSitesTwoVisitorsDifferentDays();
TwoVisitorsTwoWebsitesDifferentDaysConversionsTest::$fixture->allowConversions = true;