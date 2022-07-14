<?php
/**
 * Copyright © Ali Usman All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bathroom\Blog\Model;

class Blog extends \Magento\Framework\Model\AbstractModel {

    /**
     * @var string
     */
    protected $_cacheTag = 'bathroom_blog';

    /**
     * @var string
     */
    protected $_eventPrefix = 'bathroom_blog';

    /**
     * @return void
     */
    protected function _construct()
    {        $this->_init(\Bathroom\Blog\Model\ResourceModel\Blog::class);
    }

}