<?php

declare(strict_types=1);

namespace Conpassione\Cpkm\Command;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Core\Bootstrap;
use TYPO3\CMS\Core\Site\SiteFinder;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DependencyInjection\Attribute\Autoconfigure;

#[Autoconfigure(tags: [
   [
       'name' => 'console.command',
       'command' => 'cpkm:archive-litter',
       'description' => 'Archive litter',
   ]
])]
class ArchiveLitterCommand extends Command
{
    protected function configure(): void {
        $this->setHelp('Archives Litters');
    }

    public function __construct(
        private readonly SiteFinder $siteFinder,
      ) {
        parent::__construct();
    }
    protected function execute(InputInterface $input, OutputInterface $output): int {
        Bootstrap::initializeBackendAuthentication();

        /* Update-Query MYSQL Syntax
            update tx_cpkm_domain_model_litter set l_status = 100
            where (hidden = 0) AND (starttime = 0) AND (endtime = 0)
                AND (l_status = 2) AND (l_date < (unix_timestamp(current_timestamp) - 86400*90));
        */

        $site = $this->siteFinder->getSiteByPageId(1);
        $test = (int)$site->getSettings()->get('litter_timelimit');
        $litter_timelimit = $test;
        $connectionPool = GeneralUtility::makeInstance(ConnectionPool::class);
        $queryBuilder = $connectionPool->getQueryBuilderForTable('tx_cpkm_domain_model_litter');
        $connection = $connectionPool->getConnectionByName('Default');
        $sql = 'update tx_cpkm_domain_model_litter set l_status = 100 where (hidden = 0) AND (starttime = 0) AND (endtime = 0) AND (l_status = 2) AND (l_date < (unix_timestamp(current_timestamp) - 86400*' . $litter_timelimit . '));';
        $statement = $connection->executeStatement($sql);

        $io = new SymfonyStyle($input, $output);
        $io->title('Archives Litters wiht timelimit of ' . $litter_timelimit . ' days');
        $io->note($statement . ' Litter(s) archived successfully.');

        return Command::SUCCESS;
    }
}
