<?php
/**
 * Copyright © Ali Usman All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bathroom\Blog\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Bathroom\Blog\Model\BlogFactory;

class DeleteBlog extends Command
{

    const ID = "id";
    const NAME_OPTION = "option";

    /**
     * @var BlogFactory
     */
    protected $_blogFactory;

    /**
     * @param BlogFactory $blogFactory
     */
    public function __construct (
        BlogFactory $blogFactory
    ) {        
        $this->_blogFactory = $blogFactory;
        parent::__construct('bathroom_blog:deleteblog');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ) {
        $id = $input->getArgument(self::ID);
        $option = $input->getOption(self::NAME_OPTION);
        try {
            $model = $this->_blogFactory->create();
            $model->load($id);
            $model->delete();
        } catch (\Exception $e) {
            $output->writeln($e->getMessage());
        }
        $output->writeln("Blog with ID " . $id . ' has been deleted...');
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName("bathroom_blog:deleteblog");
        $this->setDescription("Delete Blog");
        $this->setDefinition([
            new InputArgument(self::ID, InputArgument::OPTIONAL, "Name"),
            new InputOption(self::NAME_OPTION, "-a", InputOption::VALUE_NONE, "Option functionality")
        ]);
        parent::configure();
    }
}

