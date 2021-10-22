<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class LuckuCommand extends Command
{
    protected static $defaultName = 'app:create-user';

    
    protected function configure()
  {
      static $defaultName = 'app:create-user';
    $this
         ->setDescription('The selection sort algorithm sorts an array by repeatedly finding the minimum element')
         ->setHelp('php bin/console app:help');


  }


  protected function execute(InputInterface $input, OutputInterface $output)
 {

        $output->writeln('Merhaba deneme');


 }


}
  
 



?>