<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\ExamplePlugin\tests\Unit;

/**
 * @group ExamplePlugin
 * @group SimpleTest
 * @group Plugins
 */
class SimpleTest extends \PHPUnit_Framework_TestCase
{

    public function testSimpleAddition()
    {
        $this->assertEquals(2, 1+1);
    }

}
