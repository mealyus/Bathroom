<?php
/**
 * Copyright © Ali Usman All rights reserved.
 * See COPYING.txt for license details.
*/
namespace Bathroom\Blog\Model;

class DeleteBlogManagement implements \Bathroom\Blog\Api\DeleteBlogManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function deleteDeleteBlog($param)
    {
        return 'hello api DELETE return the $param ' . $param;
    }
}

