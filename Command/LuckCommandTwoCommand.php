<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class LuckCommandTwoCommand extends Command
{
    protected static $defaultName = 'LuckCommandTwo';
    protected static $defaultDescription = 'Add a short description for your command';

    protected function configure(): void
    {
        $this
            ->setDescription(self::$defaultDescription)
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function selectionSort($arg1){
        $arraySort = [];
        for ($i=0; $i<$arg1 ; $i++) { 
            array_push($arraySort ,rand(1,100));
           
        }
        for($i = 0; $i < $arg1 ; $i++)
        {   
        $low = $i;
        for($j = $i + 1; $j < $arg1; $j++)
        {
            if ($arraySort[$j] < $arraySort[$low])
            {
                $low = $j;
            }
        }
        // swap the minimum value to $ith node
        if ($arraySort[$i] > $arraySort[$low])
        {
            $tmp = $arraySort[$i];
            $arraySort[$i] = $arraySort[$low];
            $arraySort[$low] = $tmp;
        }
       }
       
       $low = $arraySort[0];
       $max = end($arraySort);
       echo " min number  $low \n";
       echo "max number $max \n";

    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $arg1 =(int)$input->getArgument('arg1');


        if ($arg1) {
            $io->note(sprintf('You passed an argument: %s', $arg1));
        }

        


        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');
        $output->writeln($this->selectionSort($input->getArgument('arg1')));
        return 0;
    }
}
