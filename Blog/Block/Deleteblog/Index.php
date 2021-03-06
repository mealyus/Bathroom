<?php
/**
 * Copyright © Ali Usman All rights reserved.
 * See COPYING.txt for license details.
*/
namespace Bathroom\Blog\Block\Deleteblog;

class Index extends \Magento\Framework\View\Element\Template
{

    /**
     * Constructor
     *
     * @param \Magento\Backend\Block\Template\Context  $context
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }
}

