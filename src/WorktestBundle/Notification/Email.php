<?php
namespace WorktestBundle\Notification;
use WorktestBundle\Service\EmailService;
class Email implements NotificationInterface {
	protected $_data;
	
	public function setData($data){
		$this->_data = $data;
	}
	
	public function sendNotification(){
		$sendMail = new EmailService();
		$sendMail->setTitle($this->_data['title']);
		$sendMail->setMessage($this->_data['message']);
		$sendMail->setFrom($this->_data['from']);
		$sendMail->setTo($this->_data['to']);
		return $sendMail->sendEmail();
	}
}
