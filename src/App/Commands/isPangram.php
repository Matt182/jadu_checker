<?php
namespace Console\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use App\Checker;

class isPangram extends Command
{
    protected function configure(){
        $this->setName('is-pangram')
            ->setDescription('Checks if the input is a pangram')
            ->setHelp('Demonstration of custom commands created by Symfony Console component.')
            ->addArgument('input', InputArgument::REQUIRED, 'Pass the input to test.');
    }

    protected function execute(InputInterface $input, OutputInterface $output){
        $checker = new Checker();

        $toTest = $input->getArgument('input');
        $result = $checker->isPangram($toTest);

        if($result == true){
            $output->writeln("'" . $toTest . "' is a pangram");
        }elseif($result == false){
            $output->writeln("'" . $toTest . "' is not a pangram");
        }else{
            $output->writeln("Something went wrong");
        }
        return 0;
    }
}