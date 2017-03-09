<?php

namespace Creditas\Shipping\PaymentMethod;

use Creditas\Shipping\Entity\Payment;
use Creditas\Shipping\Enum\Messages;
use Creditas\Service\ServiceLocator;

class Book implements RuleInterface
{
    public function process(Payment $payment)
    {
        // generate shipping label
        ServiceLocator::get('label')->generate($payment);
    }
}