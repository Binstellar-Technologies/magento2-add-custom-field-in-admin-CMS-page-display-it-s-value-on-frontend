<?php
/**
 * Binstellar Technologies Pvt. Ltd.
 *
 *
 * @package     Binstellar_Freehomemeasure
 * @copyright   Copyright (c) Binstellar (https://www.binstellar.com/)
 */

namespace Binstellar\CmsPageCustomField\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        if(version_compare($context->getVersion(), '2.0.1', '<')) {
            $this->addTextField($setup);
        }
    }

    protected function addTextField(SchemaSetupInterface $setup)
    {
        $connection = $setup->getConnection();

        $connection->addColumn(
            $setup->getTable('cms_page'),
            'faqs',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'length' => '2M',
                'nullable' => true,
                'comment' => 'Faqs',
            ]
        );

        return $this;   
    }
}