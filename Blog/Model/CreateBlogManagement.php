<?php
/**
 * Copyright © Ali Usman All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bathroom\Blog\Model;

class CreateBlogManagement implements \Bathroom\Blog\Api\CreateBlogManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function postCreateBlog($param)
    {
        return 'hello api POST return the $param ' . $param;
    }
}

