<?php
/**
 * Copyright © Ali Usman All rights reserved.
 * See COPYING.txt for license details.
*/
namespace Bathroom\Blog\Model;

class GetBlogManagement implements \Bathroom\Blog\Api\GetBlogManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function getGetBlog($param)
    {
        return 'hello api GET return the $param ' . $param;
    }
}

