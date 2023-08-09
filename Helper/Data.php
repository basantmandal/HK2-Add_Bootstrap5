<?php

/**
 * Helper - Data
 *
 * @category  Module
 * @package   HK2_AddBootstrap5
 * @author    Basant Mandal <support@hashtagkitto.co.in>
 * @copyright 2023 Copyright (c) Basant Mandal (HK2 - HashTagKitto) (https://www.hashtagkitto.co.in/LICENSE.txt)
 * @license   MIT <https://www.hashtagkitto.co.in/LICENSE.txt>
 * @link      https://www.hashtagkitto.co.in/
 */

namespace HK2\AddBootstrap5\Helper;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;

/**
 * Main Helper Function of HK2 AddBootstrap 5
 */
class Data extends AbstractHelper
{
    /**
     * @var ScopeConfigInterface
     */
    private ScopeConfigInterface $_scopeConfig;

    // Section & Group
    private const HK2_ADDBOOTSTRAP5_GROUP_01 = 'hk2_addbootstrap5_section1/hk2_addbootstrap5_section1_group1/';
    private const HK2_ADDBOOTSTRAP5_GROUP_02 = 'hk2_addbootstrap5_section1/hk2_addbootstrap5_section1_group2/';

    // Configuration Variable
    private const HK2_ADDBOOTSTRAP5_CONFIG_ENABLE = 'hk2_addBootstrap5_enable';
    private const HK2_ADDBOOTSTRAP5_CONFIG_VERSION = 'hk2_addBootstrap5_select_bootstrap_version';
    private const HK2_ADDBOOTSTRAP5_CONFIG_DEBUG = 'hk2_addBootstrap5_debug';

    // Configurations Data
    private const HK2_ADDBOOTSTRAP5_ENABLE = self::HK2_ADDBOOTSTRAP5_GROUP_01 . self::HK2_ADDBOOTSTRAP5_CONFIG_ENABLE;
    private const HK2_ADDBOOTSTRAP5_VERSION = self::HK2_ADDBOOTSTRAP5_GROUP_02 . self::HK2_ADDBOOTSTRAP5_CONFIG_VERSION;
    private const HK2_ADDBOOTSTRAP5_DEBUG = self::HK2_ADDBOOTSTRAP5_GROUP_02 . self::HK2_ADDBOOTSTRAP5_CONFIG_DEBUG;

    /**
     * Construct
     *
     * @param Context $context
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(Context $context, ScopeConfigInterface $scopeConfig)
    {
        parent::__construct($context);
        $this->_scopeConfig = $scopeConfig;
    }

    /**
     * Returns Is Enabled Data from Configuration
     *
     * @return mixed
     */
    public function isEnabled()
    {
        return $this->_scopeConfig->getValue(self::HK2_ADDBOOTSTRAP5_ENABLE, ScopeInterface::SCOPE_STORE);
    }

    /**
     * Returns Bootstrap Version Data from Configuration
     *
     * @return mixed
     */
    public function getBootstrapVersion()
    {
        return $this->_scopeConfig->getValue(self::HK2_ADDBOOTSTRAP5_VERSION, ScopeInterface::SCOPE_STORE);
    }

    /**
     * Returns Is Debug Data from Configuration
     *
     * @return mixed
     */
    public function isDebugEnabled()
    {
        return $this->_scopeConfig->getValue(self::HK2_ADDBOOTSTRAP5_DEBUG, ScopeInterface::SCOPE_STORE);
    }

    /**
     * Returns Generated Bootstrap CSS CDN Link
     *
     * @param  [type] $version
     *
     * @return mixed
     */
    public function generateBootstrapCdnLink($version)
    {
        // @codingStandardsIgnoreStart
        // Bootstrap 5.2.3
        $bs523_cdn = 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css';
        $bs523_integrity = 'sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65';
        $bootstrap523_link = '<link href="' . $bs523_cdn . '" rel="stylesheet" integrity="' . $bs523_integrity . '" crossorigin="anonymous" />';
        $bootstrap_5_2_3_jsdelivr = ['style' => $bootstrap523_link];

        // Bootstrap 5.1.3
        $bs513_cdn = 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css';
        $bs513_integrity = 'sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3';
        $bootstrap513_link = '<link href="' . $bs513_cdn . '" rel="stylesheet" integrity="' . $bs513_integrity . '" crossorigin="anonymous" />';
        $bootstrap_5_1_3_jsdelivr = ['style' => $bootstrap513_link];

        // Bootstrap 4.6.2
        $bs462_cdn = 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css';
        $bs462_integrity = 'sha512-iQQV+nXtBlmS3XiDrtmL+9/Z+ibux+YuowJjI4rcpO7NYgTzfTOiFNm09kWtfZzEB9fQ6TwOVc8lFVWooFuD/w==';
        $bootstrap462_link = '<link href="' . $bs462_cdn . '" rel="stylesheet" integrity="' . $bs462_integrity . '" crossorigin="anonymous" />';
        $bootstrap_4_6_2_jsdelivr = ['style' => $bootstrap462_link];
        // @codingStandardsIgnoreEnd

        switch ($version) {
            case '5.1.3':
                $link = $bootstrap_5_1_3_jsdelivr;
                break;
            case '4.6.2':
                $link = $bootstrap_4_6_2_jsdelivr;
                break;
            default:
                $link = $bootstrap_5_2_3_jsdelivr;
        }

        return $link;
    }
}