<?php
namespace WorktestBundle\Service;
class SMSService {
	private $store = array();
	public function __construct(){ }
	public function setMessage($text) { $this->store['Message'] = $text; }
	public function setFrom($text) { $this->store['From'] = $text; }
	public function setTo($text) { $this->store['To'] = $text; }
	public function sendSMS(){ return array('Processing'=>"Sent SMS Service", 'store'=>$this->store); }
}
