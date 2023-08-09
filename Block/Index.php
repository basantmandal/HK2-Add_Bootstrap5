<?php

/**
 * Block - Index
 *
 * @category  Module
 * @package   HK2_AddBootstrap5
 * @author    Basant Mandal <support@hashtagkitto.co.in>
 * @copyright 2023 Copyright (c) Basant Mandal (HK2 - HashTagKitto) (https://www.hashtagkitto.co.in/LICENSE.txt)
 * @license   MIT <https://www.hashtagkitto.co.in/LICENSE.txt>
 * @link      https://www.hashtagkitto.co.in/
 */

namespace HK2\AddBootstrap5\Block;

use HK2\AddBootstrap5\Helper\Data as HK2_Helper;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Index extends Template
{
    /**
     * @var HK2_Helper
     */
    private HK2_Helper $hk2_helper;

    /**
     * Constructor
     *
     * @param  Context    $context
     * @param  HK2_Helper $hk2Helper
     * @param  array      $data
     */
    public function __construct(Context $context, HK2_Helper $hk2Helper, array $data = [])
    {
        $this->hk2_helper = $hk2Helper;
        parent::__construct($context, $data);
    }

    /**
     * Returns Is Enabled Config
     *
     * @return mixed
     */
    public function isEnabled()
    {
        return $this->hk2_helper->isEnabled();
    }

    /**
     * Returns Is Debug Enabled Config
     *
     * @return mixed
     */
    public function isDebugEnabled()
    {
        return $this->hk2_helper->isDebugEnabled();
    }

    /**
     * Returns Bootstrap Version in Configuration
     *
     * @return mixed
     */
    public function getBootstrapVersion()
    {
        return $this->hk2_helper->getBootstrapVersion();
    }

    /**
     * Returns Generated Bootstrap CDN Link
     *
     * @param [type] $version
     * @return mixed|string[]
     */
    public function generateBootstrapCdnLink($version)
    {
        return $this->hk2_helper->generateBootstrapCdnLink($version);
    }
}