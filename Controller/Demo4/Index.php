<?php

namespace HK2\AddBootstrap5\Controller\Demo4;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

use HK2\AddBootstrap5\Helper\Data as HK2_Bootstrap_Helper;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var PageFactory
     */
    protected PageFactory $_pageFactory;

    /**
     * @var HK2_Bootstrap_Helper|HK2_Bootstrap_Helper
     */
    private HK2_Bootstrap_Helper $hk2_helper;

    /**
     * Constructor
     *
     * @param Context $context
     * @param PageFactory $pageFactory
     * @param HK2_Bootstrap_Helper $hk2Helper
     */
    public function __construct(Context $context, PageFactory $pageFactory, HK2_Bootstrap_Helper $hk2Helper)
    {
        $this->_pageFactory = $pageFactory;
        $this->hk2_helper = $hk2Helper;

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
        $bootstrap_version = $this->hk2_helper->getBootstrapVersion();
        $pageFactory->getConfig()->getTitle()->set("Demo - Bootstrap $bootstrap_version");

        return $pageFactory;
    }
}
