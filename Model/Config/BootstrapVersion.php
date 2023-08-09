<?php

/**
 * Model - Config - Bootstrap Version
 *
 * @category  Module
 * @package   HK2_AddBootstrap5
 * @author    Basant Mandal <support@hashtagkitto.co.in>
 * @copyright 2023 Copyright (c) Basant Mandal (HK2 - HashTagKitto) (https://www.hashtagkitto.co.in/LICENSE.txt)
 * @license   MIT <https://www.hashtagkitto.co.in/LICENSE.txt>
 * @link      https://www.hashtagkitto.co.in/
 */

namespace HK2\AddBootstrap5\Model\Config;

class BootstrapVersion extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    /**
     * @var [type]
     */
    protected $_options;

    /**
     * Get All Options
     *
     * @return array[]
     */
    public function getAllOptions(): array
    {
        if ($this->_options === null) {
            $optionArray = $this->getBoostrapVersion();
            $labels = array_column($optionArray, 'label');
            $values = array_column($optionArray, 'value');
            $this->_options = array_combine($values, $labels);
        }
        return $this->_options;
    }

    /**
     * To Option Array
     *
     * @return array[]
     */
    public function toOptionArray(): array
    {
        $optionArray = $this->getBoostrapVersion();
        $labels = array_column($optionArray, 'label');
        $values = array_column($optionArray, 'value');
        return array_combine($values, $labels);
    }

    /**
     * Get Bootstrap Version
     *
     * @return array[]
     */
    public function getBoostrapVersion(): array
    {
        return [
            ['value' => '5.2.3', 'label' => __('Bootstrap5.2.3')],
            ['value' => '5.1.3', 'label' => __('Bootstrap5.1.3')],
            ['value' => '4.6.2', 'label' => __('Bootstrap4.6.2')]
        ];
    }
}