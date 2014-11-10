<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

namespace Piwik\Plugins\VisitorGenerator\Commands;

use Piwik\Piwik;
use Piwik\Plugin\ConsoleCommand;
use Piwik\Plugins\VisitorGenerator\Generator\Users;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateUsers extends ConsoleCommand
{
    protected function configure()
    {
        $this->setName('visitorgenerator:generate-users');
        $this->setDescription('Generates many users. This command is intended for developers.');
        $this->addOption('limit', null, InputOption::VALUE_REQUIRED, 'Defines how many users should be generated', 10);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        Piwik::setUserHasSuperUserAccess();

        $limit = $input->getOption('limit');

        $websiteGenerator = new Users();
        $userLogins       = $websiteGenerator->generate((int) $limit);

        $this->writeSuccessMessage($output, array(count($userLogins) . ' Users generated'));
    }

}
