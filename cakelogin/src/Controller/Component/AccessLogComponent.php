<?php
declare(strict_types=1);

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use DateTime;
use Cake\ORM\TableRegistry;
/**
 * AccessLog component
 */
class AccessLogComponent extends Component
{
   
    protected $_defaultConfig = [];

    public function saveLog($user_id,$username,$customer_id = null,$function_id,$log_level)
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = new DateTime('now');
        switch(date("l"))
        {
            case "Monday":
                $weekday = 1;
                break;
            case "Tuesday":
                $weekday = 2;
                break;
            case "Wednesday":
                $weekday = 3;
                break;
            case "Thursday":
                $weekday = 4;
                break;
            case "Friday":
                $weekday = 5;
                break;
            case "Saturday":
                $weekday = 6;
                break;
            case "Sunday":
                $weekday = 7;
                break;
        }
        $accessLogTable = TableRegistry::getTableLocator()->get('SurveyAccessLog');
        $accessLog = $accessLogTable->newEmptyEntity();
        $accessLog->SYAIN_CD = $user_id;
        $accessLog->SELLER_ID = $username;
        $accessLog->CUSTOMER_ID = $customer_id;
        $accessLog->FUNCTION_ID = $function_id;
        $accessLog->ACCESS_LOG_LEVEL = $log_level;
        $accessLog->ACCESS_DT = $date;
        $accessLog->YYYYMM = date('Y-m');
        $accessLog->HOUR = date("H");
        $accessLog->WEEKDAY = $weekday;
        $accessLogTable->save($accessLog);
    }
}
