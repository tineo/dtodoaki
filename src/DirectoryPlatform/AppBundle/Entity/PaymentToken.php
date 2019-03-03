<?php

namespace DirectoryPlatform\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Payum\Core\Model\Token;

/**
 * @ORM\Table(name="directory_platform_payment_tokens")
 * @ORM\Entity()
 */
class PaymentToken extends Token
{
}
