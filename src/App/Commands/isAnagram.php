<?php
namespace Console\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use App\Checker;

class isAnagram extends Command
{
    protected function configure(){
        $this->setName('is-anagram')
            ->setDescription('Checks if the input is an anagram of the comparison')
            ->setHelp('Demonstration of custom commands created by Symfony Console component.')
            ->addArgument('input', InputArgument::REQUIRED, 'Pass the input to test.')
            ->addArgument('compare', InputArgument::REQUIRED, 'Pass the input to compare.');
    }

    protected function execute(InputInterface $input, OutputInterface $output){
        $checker = new Checker();

        $toTest = $input->getArgument('input');
        $compare = $input->getArgument('compare');
        $result = $checker->isAnagram($toTest, $compare);

        if($result == true){
            $output->writeln($compare . " is an anagram of " . $toTest);
        }elseif($result == false){
            $output->writeln($compare . " is not an anagram of " . $toTest);
        }else{
            $output->writeln("Something went wrong");
        }
        return 0;
    }
}