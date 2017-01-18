<?php

namespace WorktestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WorktestBundle\Notification\NotificationManager;

class DefaultController extends Controller {
    public function indexAction(){
		$n = new NotificationManager();
		
		# Send Email Notification
		$print['email'] = $n->sendNotification(
				'email'
				, array(
					'title'=>'Test send email notification: Title'
					, 'message'=>'Test send email notification: Message'
					, 'from'=>'j_jirawit@yahoo.com'
					, 'to'=>'info@thailuxurycharters.com'
				));
		
		# Send SMS Notification
		$print['sms'] = $n->sendNotification(
				'sms'
				, array(
					'message'=>'Test send sms notification: Message'
					, 'from'=>'+66 8 1542 7634'
					, 'to'=>'+66 76 350 193'
				));
		
        return $this->render('WorktestBundle:Default:index.html.twig', array('print'=>$print));
    }
}
