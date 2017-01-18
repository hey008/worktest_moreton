<?php
namespace WorktestBundle\Service;
class EmailService {
	private $store = array();
	public function __construct(){ }
	public function setTitle($text){ $this->store['Title'] = $text; }
	public function setMessage($text){ $this->store['Message'] = $text; }
	public function setFrom($text){ $this->store['From'] = $text; }
	public function setTo($text){ $this->store['To'] = $text; }
	public function sendEmail(){ return array('Processing'=>"Sent Email Service", 'store'=>$this->store); }
}
