<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Tests\Unit;

use Piwik\Plugins\ScheduledReports\ScheduledReports;
use Piwik\ScheduledTask;

class ScheduledTaskTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @group Core
     */
    public function testGetClassName()
    {
        $scheduledTask = new ScheduledTask(new ScheduledReports(), null, null, null);
        $this->assertEquals('Piwik\Plugins\ScheduledReports\ScheduledReports', $scheduledTask->getClassName());
    }

    /**
     * Dataprovider for testGetTaskName
     */
    public function getTaskNameTestCases()
    {
        return array(
            array('CoreAdminHome.purgeOutdatedArchives', 'CoreAdminHome', 'purgeOutdatedArchives', null),
            array('CoreAdminHome.purgeOutdatedArchives_previous30', 'CoreAdminHome', 'purgeOutdatedArchives', 'previous30'),
            array('ScheduledReports.weeklySchedule', 'ScheduledReports', 'weeklySchedule', null),
            array('ScheduledReports.weeklySchedule_1', 'ScheduledReports', 'weeklySchedule', 1),
        );
    }

    /**
     * @group Core
     *
     * @dataProvider getTaskNameTestCases
     */
    public function testGetTaskName($expectedTaskName, $className, $methodName, $methodParameter)
    {
        $this->assertEquals($expectedTaskName, ScheduledTask::getTaskName($className, $methodName, $methodParameter));
    }
}
