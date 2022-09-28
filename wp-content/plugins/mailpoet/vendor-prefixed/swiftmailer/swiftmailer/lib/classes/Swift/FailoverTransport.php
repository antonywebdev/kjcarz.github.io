<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
class Swift_FailoverTransport extends Swift_Transport_FailoverTransport
{
 public function __construct($transports = [])
 {
 \call_user_func_array([$this, 'MailPoetVendor\\Swift_Transport_FailoverTransport::__construct'], Swift_DependencyContainer::getInstance()->createDependenciesFor('transport.failover'));
 $this->setTransports($transports);
 }
}
