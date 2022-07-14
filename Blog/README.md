# Mage2 Module Bathroom Blog

    ``bathroom/module-blog``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
BahtroomsByDesign Blog Module

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Bathroom`
 - Enable the module by running `php bin/magento module:enable Bathroom_Blog`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require bathroom/module-blog`
 - enable the module by running `php bin/magento module:enable Bathroom_Blog`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - is_enable (blog/setting/is_enable)


## Specifications

 - API Endpoint
	- GET - Bathroom\Blog\Api\GetBlogManagementInterface > Bathroom\Blog\Model\GetBlogManagement

 - API Endpoint
	- POST - Bathroom\Blog\Api\CreateBlogManagementInterface > Bathroom\Blog\Model\CreateBlogManagement

 - API Endpoint
	- DELETE - Bathroom\Blog\Api\DeleteBlogManagementInterface > Bathroom\Blog\Model\DeleteBlogManagement

 - Console Command
	- CreateBlog
	- Example: php bin/magento bathroom_blog:createblog "Blog Title"::"Blog Description"

 - Console Command
	- GetBlog
	- php bin/magento bathroom_blog:getblog (To fetch all the blogs)
	- php bin/magento bathroom_blog:getblog <ID> (To fetch specific blog using ID parameter)

 - Console Command
	- DeleteBlog
	- Example php bin/magento bathroom_blog:deleteblog 6 (where 6 is the blog ID)