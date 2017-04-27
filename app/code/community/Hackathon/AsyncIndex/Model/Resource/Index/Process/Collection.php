<?php

/**
 * This file is part of AsyncIndex for Magento.
 *
 * @package     AsyncIndex
 * @copyright   Copyright (c) 2017 Newtown-Web OG (http://www.newtown.at)
 * @author      Ingo Fabbri <if@newtown.at>
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Hackathon_AsyncIndex_Model_Resource_Index_Process_Collection extends Mage_Index_Model_Resource_Process_Collection
{
    /**
     * Event object name
     *
     * @var string
     */
    protected $_eventObject = 'process_collection';

    /**
     * Event prefix name
     *
     * @var string
     */
    protected $_eventPrefix = 'process_collection';
}