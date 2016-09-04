<?php

class Assist{
    public static function formatCount($i = 0){
        $i = $i ?: 0;
        return $i > 9999? '9999+' : $i;
    }

    public static function stripEmptyTag($content){
        return preg_replace('/<p><br\/?><\/p>/im', '', str_replace(array("\r\n", "\r", "\n"), '', $content));
    }

    public static function getHashcode($data){
        $str = '';
        foreach($data as $v) {
            $str .= $v['lng'] . '' . $v['lat'];
        }
        return md5($str);
    }

    public static function getOSSToken(){
        $bucket = Yii::app()->params['partner']['oss']['bucket'];
        $domain = Yii::app()->params['partner']['oss']['domain'];
        $id = Yii::app()->params['partner']['oss']['id'];
        $key = Yii::app()->params['partner']['oss']['key'];
        $host = Yii::app()->params['partner']['oss']['host'];
        $oss = new upload($id, $key, $domain);
        $upToken = $oss->uploadToken($bucket);
        return array('uptoken'=>$upToken,'domain'=>$domain);
    }

    public static function timestampToMonthTimestamp($time){
        return date('t',$time)*86400;
    }

    public static function getEndDate($startDate,$months){
        $times = date('U',strtotime($startDate));
        for($i=0;$i<$months;$i++){
            $times = self::timestampToMonthTimestamp($times)+$times;
        }
        return date('Y-m-d',$times-86400);
    }

    public static function sendmail($email,$productname,$codename){
        $smtpserver = 'mail.nakedhub.cn';
        $smtpserverport = 25;
        $smtpusermail = 'noresponse@nakedhub.cn';
        $smtpuser = 'noresponse@nakedhub.cn';
        $smtppass = 'Newuser1';
        $smtp = new Smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
        $emailtype = 'HTML';
        $smtpemailto = $email;
        $smtpemailfrom = $smtpusermail;
        $emailsubject = '【naked Hub 裸心社】';
        $emailbody = 'Welcome to naked Hub! Your product '.$productname.' activation code for joining the naked Hub community App is: '.$codename.'';                
        $rs = $smtp->sendmail($smtpemailto,$smtpemailfrom,$emailsubject,$emailbody,$emailtype);
        return $rs;
    }

    public static function uuid(){
        $chars = md5(uniqid(mt_rand(), true));  
        $uuid  = substr($chars,0,8);
        // $uuid .= substr($chars,8,4) . '-';  
        // $uuid .= substr($chars,12,4) . '-';  
        // $uuid .= substr($chars,16,4) . '-';  
        // $uuid .= substr($chars,20,12);  
        return $uuid;
    }
}