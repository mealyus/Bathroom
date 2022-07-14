<?php
/**
 * Copyright © Ali Usman All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bathroom\Blog\Model\ResourceModel\Blog;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'entity_id';
	protected $_eventPrefix = 'bathroom_blog';
	protected $_eventObject = 'blog_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Bathroom\Blog\Model\Blog', 'Bathroom\Blog\Model\ResourceModel\Blog');
	}

}