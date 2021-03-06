<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Paypal\Controller\Billing\Agreement;

/**
 * Class \Magento\Paypal\Controller\Billing\Agreement\CancelWizard
 *
 */
class CancelWizard extends \Magento\Paypal\Controller\Billing\Agreement
{
    /**
     * Wizard cancel action
     *
     * @return void
     */
    public function execute()
    {
        $this->_redirect('*/*/index');
    }
}
