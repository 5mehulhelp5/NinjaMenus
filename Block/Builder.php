<?php
/**
 * Cytracon
 *
 * This source file is subject to the Cytracon Software License, which is available at https://www.cytracon.com/license
 * Do not edit or add to this file if you wish to upgrade the to newer versions in the future.
 * If you wish to customize this module for your needs.
 * Please refer to https://www.cytracon.com for more inmenuation.
 *
 * @category  Cytracon
 * @package   Cytracon_NinjaMenus
 * @copyright Copyright (C) 2019 Cytracon (https://www.cytracon.com)
 */

namespace Cytracon\NinjaMenus\Block;

class Builder extends \Cytracon\Builder\Block\Builder
{
    /**
     * @param \Magento\Framework\View\Element\Template\Context  $context        
     * @param \Cytracon\NinjaMenus\Model\CompositeConfigProvider $configProvider 
     * @param array                                             $data           
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Cytracon\NinjaMenus\Model\CompositeConfigProvider $configProvider,
        array $data = []
    ) {
        parent::__construct($context, $configProvider, $data);
    }

    /**
     * @return array
     * @codeCoverageIgnore
     */
    public function getBuilderConfig()
    {   
        $config = parent::getBuilderConfig();
        $config['mainElement'] = 'menu_item';
        return $config;
    }
}