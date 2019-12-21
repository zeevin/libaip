<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2019/12/20
 * Time: 17:06
 * Source: consumeApply.php
 * Project: libaip
 */

require './bootstrap.php';
$config = require './config.php';
$app = new \Zeevin\Libaip\Application($config);

$request = new \Zeevin\Libaip\Order\RequestAttribute\ConsumeApplyRequest();

$request->setPayerId($app->config->get('test_data')['company']['biz_user_id'])
    ->setAmount(1)
    ->setFee(0)
    ->setValidateType(0)
    ->setPayMethod(
        [['T24'=>[
        'account_set_no' => $app->config->get('account_set_no'),
        'amount' => $request->getAmount()
    ]]])
    ->setOrderExpireDatetime(new DateTime('+15 minutes'))
    ->getProjectExtension()
    ->setProjectOrderType(103)
    ->setProjectOrderId('C_'.bin2hex(random_bytes(10)));

//echo $request;exit;

$ret = $app->order_consumeApply->request($request)->getResult('json');


echo $ret;