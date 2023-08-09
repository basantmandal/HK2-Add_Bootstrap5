<?php

/**
 * Controller - Demov4 - Index
 *
 * @category  Module
 * @package   HK2_AddBootstrap5
 * @author    Basant Mandal <support@hashtagkitto.co.in>
 * @copyright 2023 Copyright (c) Basant Mandal (HK2 - HashTagKitto) (https://www.hashtagkitto.co.in/LICENSE.txt)
 * @license   MIT <https://www.hashtagkitto.co.in/LICENSE.txt>
 * @link      https://www.hashtagkitto.co.in/
 */

namespace HK2\AddBootstrap5\Controller\Demo4;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var PageFactory
     */
    protected PageFactory $_pageFactory;

    /**
     * @param Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;

        return parent::__construct($context);
    }

    /**
     * Execute
     *
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $pageFactory = $this->_pageFactory->create();
        $pageFactory->getConfig()->getTitle()->set('Demo - Bootstrap 4.x');

        return $pageFactory;
    }
}