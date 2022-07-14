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


class CreateBlog extends Command
{

    const CONTENT = "content";
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
        parent::__construct('bathroom_blog:createblog');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ) {
        $content = $input->getArgument(self::CONTENT);
        $blog_data = $this->getParams($content);
        try {
            $model = $this->_blogFactory->create();
            $model->setTitle($blog_data['title']);
            $model->setContent($blog_data['description']);
            $model->save();
        } catch (\Exception $e) {
            $output->writeln($e->getMessage());
        }
        $output->writeln("Blog has been created with title as: " . $blog_data['title']);
    }

    protected function getParams($content) {
        $blog_data = array(
            'title' => '',
            'description' => ''
        );
        $blog_arr = explode('::', $content);
        if (isset($blog_arr[0])) {
            $blog_data['title'] = $blog_arr[0];
        }
        if (isset($blog_arr[1])) {
            $blog_data['description'] = $blog_arr[1];
        }

        return $blog_data;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName("bathroom_blog:createblog");
        $this->setDescription("Create New Blog");
        $this->setDefinition([
            new InputArgument(self::CONTENT, InputArgument::OPTIONAL, "Content"),
            new InputOption(self::NAME_OPTION, "-a", InputOption::VALUE_NONE, "Option functionality")
        ]);
        parent::configure();
    }
}

