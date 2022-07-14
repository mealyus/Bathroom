<?php
/**
 * Copyright © Ali Usman All rights reserved.
 * See COPYING.txt for license details.
*/
namespace Bathroom\Blog\Controller\Adminhtml\Deleteblog;

use Magento\Framework\App\Action\HttpDeleteActionInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements HttpDeleteActionInterface
{

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * Constructor
     *
     * @param PageFactory $resultPageFactory
     */
    public function __construct(PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Execute view action
     *
     * @return ResultInterface
     */
    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}

