<?php
namespace WorktestBundle\Notification;
use WorktestBundle\Notification\Email;
use WorktestBundle\Notification\SMS;
interface NotificationInterface {
	public function setData($data);
	public function sendNotification();
}
class NotificationManager {
	public function sendNotification($type, $data) {
		switch($type){
			case "email": 
				$notification = new Email();
				break;
			case "sms":
				$notification = new SMS();
				break;
			default:
				// Do something to log an exception 
				return false;
				break;
		}
    
		$notification->setData($data);
		return $notification->sendNotification();
  }
}