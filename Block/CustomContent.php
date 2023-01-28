<?php
/**
 * Binstellar Technologies Pvt. Ltd.
 *
 *
 * @package     Binstellar_Freehomemeasure
 * @copyright   Copyright (c) Binstellar (https://www.binstellar.com/)
 */
namespace Binstellar\CmsPageCustomField\Block;

class CustomContent extends \Magento\Cms\Block\Page
{
    /**
     * Prepare HTML content
     *
     * @return string
     */
    protected function _toHtml()
    { 
        $html = $this->_filterProvider->getPageFilter()->filter($this->getPage()->getFaqs());
        
        return $html;
    }
}