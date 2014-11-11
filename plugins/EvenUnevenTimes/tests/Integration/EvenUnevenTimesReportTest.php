<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\EvenUnevenTimes\tests\Integration;

use Piwik\Plugins\EvenUnevenTimes\tests\fixtures\SimpleFixtureTrackFewVisits;
use Piwik\Tests\Framework\TestCase\SystemTestCase;

/**
 * @group EvenUnevenTimes
 * @group EvenUnevenTimesReportTest
 * @group Plugins
 */
class EvenUnevenTimesReportTest extends SystemTestCase
{
    /**
     * @var SimpleFixtureTrackFewVisits
     */
    public static $fixture = null; // initialized below class definition

    /**
     * @dataProvider getApiForTesting
     */
    public function testApi($api, $params)
    {
        $this->runApiTests($api, $params);
    }

    public function getApiForTesting()
    {
        return array(
                array('EvenUnevenTimes.getEvenUnevenTimesReport', array(
                    'idSite' => self::$fixture->idSite, 
                    'date' => self::$fixture->dateTime
                ))
        );
    }

    public static function getOutputPrefix()
    {
        return '';
    }

    public static function getPathToTestDirectory()
    {
        return dirname(__FILE__);
    }

}

EvenUnevenTimesReportTest::$fixture = new SimpleFixtureTrackFewVisits();