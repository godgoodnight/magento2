<?php
/**
 * Copyright © 2013-2017 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Analytics\Test\TestStep;

use Magento\Backend\Test\Page\Adminhtml\Dashboard;
use Magento\Mtf\TestStep\TestStepInterface;

/**
 * Steps:
 * 1. Log in to backend.
 * 2. Click OK on subscription pop-up
 */
class AcceptSubscriptionStep implements TestStepInterface
{
    /**
     * Dashboard page.
     *
     * @var Dashboard
     */
    private $dashboard;

    /**
     * AcceptSubscriptionStep constructor.
     *
     * @param Dashboard $dashboard
     */
    public function __construct(Dashboard $dashboard)
    {
        $this->dashboard = $dashboard;
    }

    /**
     * Skip Subscription step.
     *
     * @return void
     */
    public function run()
    {
        $this->dashboard->open();
        $this->dashboard->getSubscriptionBlock()->enableCheckbox();
        $this->dashboard->getModalBlock()->acceptWarning();
    }
}
