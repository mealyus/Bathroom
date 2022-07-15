<?php
/**
 * Copyright © Ali Usman All rights reserved.
 * See COPYING.txt for license details.
*/
namespace Bathroom\Blog\Block\Blogs;
use Magento\Framework\App\Request\DataPersistorInterface;
use Bathroom\Blog\Model\BlogFactory;

class Index extends \Magento\Framework\View\Element\Template
{
    /**
     * @var BlogFactory
     */
    protected $_blogFactory;

    /**
     * Constructor
     *
     * @param \Magento\Backend\Block\Template\Context  $context
     * @param BlogFactory $blogFactory
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        BlogFactory $blogFactory,
        array $data = []
    ) {
        $this->_blogFactory = $blogFactory;
        parent::__construct($context, $data);
    }

    public function getBlogsData()
    {
        $all_data = '';
        try {
            $model = $this->_blogFactory->create();
            $all_data = $model->getCollection();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        return $all_data;
    }
}

