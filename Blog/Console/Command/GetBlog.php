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

class GetBlog extends Command
{

    const BLOG_ID = "name";
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
        parent::__construct('bathroom_blog:getblog');
    }
    
    /**
     * {@inheritdoc}
     */
    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ) {
        $blog_id = $input->getArgument(self::BLOG_ID);
        try {
            $model = $this->_blogFactory->create();
            $collection = $model->getCollection();
            if (isset($blog_id)) {
                $collection = $model->getCollection()->addFieldToFilter('entity_id', $blog_id);
            }
            foreach($collection as $item) {
                $all_data = array(
                    'ID' => $item->getEntityId(),
                    'Title' => $item->getTitle(),
                    'Description' => $item->getContent()
                );
                $all_data = json_encode($all_data);
                $output->writeln($all_data);
            }
        } catch (\Exception $e) {
            $output->writeln($e->getMessage());
        }
        $output->writeln('Done...');
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName("bathroom_blog:getblog");
        $this->setDescription("Get Blog Post");
        $this->setDefinition([
            new InputArgument(self::BLOG_ID, InputArgument::OPTIONAL, "Name"),
            new InputOption(self::NAME_OPTION, "-a", InputOption::VALUE_NONE, "Option functionality")
        ]);
        parent::configure();
    }
}

