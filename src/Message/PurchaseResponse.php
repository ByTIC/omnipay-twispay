<?php

namespace ByTIC\Omnipay\Twispay\Message;

use ByTIC\Common\Payments\Gateways\Providers\AbstractGateway\Message\PurchaseResponse as AbstractPurchaseResponse;
use ByTIC\Common\Payments\Gateways\Providers\AbstractGateway\Message\RedirectResponse\RedirectTrait;
use Omnipay\Common\Message\RedirectResponseInterface;

/**
 * PayU Purchase Response
 */
class PurchaseResponse extends AbstractPurchaseResponse implements RedirectResponseInterface
{
    use RedirectTrait;

    /**
     * @return array
     */
    public function getRedirectData()
    {
        $data = [
            'env_key' => $this->getDataProperty('env_key'),
            'data' => $this->getDataProperty('data'),
        ];

        return $data;
    }
}
