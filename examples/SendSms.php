<?php

function sendsms() {
    $SMS_USER = "vvjob_sms";
    $SMS_KEY = "Q6rcisx7nzghMzotBRqCIvyyVN9IvO1h";
    $smsTemplateId = 3213;
    $sendSms = new \sendcloud\SendCloudSMS($SMS_USER, $SMS_KEY);
    $smsMsg = new \sendcloud\util\SmsMsg();
    $smsMsg->addPhoneList(array("15177326257"));
    $smsMsg->addVars("code", "801016");
    $smsMsg->setTemplateId($smsTemplateId);
    $resonse = $sendSms->send($smsMsg);
    $r = $resonse->data();
    dump($r);
}

function sendVoiceMsg() {
    $sendSms = new \sendcloud\SendCloudSMS('vvjob_sms', 'Q6rcisx7nzghMzotBRqCIvyyVN9IvO1h');
    $voiceMsg = new \sendcloud\util\VoiceMsg();
    $voiceMsg->setCode($code);
    $voiceMsg->setPhone($mobile);
    $resonse = $sendSms->sendVoice($voiceMsg);
    $r = $resonse->data();
    dump($r);
}

function sendMms() {
    $SMS_USER = "***";
    $SMS_KEY = "***";
    $mmsTemplateId = 320;
    $sendSms = new \sendcloud\SendCloudSMS($SMS_USER, $SMS_KEY);
    $smsMsg = new \sendcloud\util\SmsMsg();
    $smsMsg->addPhoneList(array("13871506390"));
    $smsMsg->addVars("code", "1234");
    $smsMsg->setMsgType(\sendcloud\util\MsgType::MMS);

    $smsMsg->addMapVars(array("name" => 'xiao'));
    $smsMsg->setTemplateId($mmsTemplateId);
    $resonse = $sendSms->send($smsMsg);
    echo $resonse->body();
}
