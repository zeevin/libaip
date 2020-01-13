<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/1/9
 * Time: 18:50
 * Source: AgentCollectApplyClient.php
 * Project: libaip
 */

namespace Zeevin\Libaip\Order;


use Zeevin\Libaip\Core\BaseClient;
use Zeevin\Libaip\Order\ResponseAttribute\WithdrawApplyResponse;

/**
 * Class AgentCollectApplyClient
 * @method  WithdrawApplyResponse getResult($format = 'object', $extendNameSpace = null)
 * @package Zeevin\Libaip\Order
 */
class AgentCollectApplyClient extends BaseClient
{
    protected $domain = 'Order';
    protected $id = 'agentCollectApply';
}