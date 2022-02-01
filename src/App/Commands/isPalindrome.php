<?php
namespace Console\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use App\Checker;

class isPalindrome extends Command
{
    protected function configure(){
        $this->setName('is-palindrome')
            ->setDescription('Checks if the input is a palindrome')
            ->setHelp('Demonstration of custom commands created by Symfony Console component.')
            ->addArgument('input', InputArgument::REQUIRED, 'Pass the input to test.');
    }

    protected function execute(InputInterface $input, OutputInterface $output){
        $checker = new Checker();

        $toTest = $input->getArgument('input');
        $result = $checker->isPalindrome($toTest);

        if($result == true){
            $output->writeln($toTest . " is a palindrome");
        }elseif($result == false){
            $output->writeln($toTest . " is not a palindrome");
        }else{
            $output->writeln("Something went wrong");
        }
        return 0;
    }
}