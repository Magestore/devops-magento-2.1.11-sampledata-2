<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace \Test\Handler\Fixture;

use \Test\Handler\Fixture\FixtureInterface;
use Magento\Mtf\Fixture\FixtureInterface;
use Magento\Mtf\Handler\Ui as AbstractUi;

/**
 * Class Ui
 */
class Ui extends AbstractUi implements FixtureInterface
{
   public function persist(FixtureInterface $fixture = null)
    {
        //
    }
}
