<?php
/**
 * Copyright © Ali Usman All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Bathroom\Blog\Api;

interface CreateBlogManagementInterface
{

    /**
     * POST for CreateBlog api
     * @param string $param
     * @return string
     */
    public function postCreateBlog($param);
}

