<?php
namespace WorktestBundle\Notification;
use WorktestBundle\Service\SMSService;
class SMS implements NotificationInterface {
	protected $_data;
	
	public function setData($data){
		$this->_data = $data;
	}
	
	public function sendNotification(){
		$sms = new SMSService();
		$sms->setMessage($this->_data['message']);
		$sms->setFrom($this->_data['from']);
		$sms->setTo($this->_data['to']);
		return $sms->sendSMS();
	}
}
