<?php
namespace Jhg\NexmoSmsBundle\Entity;

use Jhg\NexmoSmsBundle\Model\Sms as SmsModel;

/**
 * Class BaseSms
 * @package Jhg\NexmoBundle\Entity
 * @author Javi Hernández
 */
class BaseSms extends SmsModel {
    /**
     * Hook on pre-persist operations
     */
    public function prePersist()
    {
        $this->createdAt = new \DateTime;
    }

} 