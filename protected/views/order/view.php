<div id='edit-order-page' class='row-fluid'>
    <div class='row-fluid'>
        <div class='span12 box bordered-box blue-border'>
            <div class='box-content box-padding'>
                <fieldset>
                    <div class='span12'>
                        <div class='control-group'>
                            <label class='control-label'><small class='muted'>购买人：<?php echo $data['nickName']?></small></label>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'><small class='muted'>购买人手机号：<?php echo $data['phone']?></small></label>
                        </div>                     
                        <div class='control-group'>
                            <label class='control-label'>
                            <small class='muted'>
                                <img src="<?php echo $data['portrait']?:'/images/account-default.png' ?>" style="width:60px;height:60px">
                            </small></label>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'>
                            <small class='muted'>价格：
                                <?php echo $data['totalprice']?>
                            </small></label>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'><small class='muted'>购买备注：<?php echo $data['remark']?></small></label>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'><small class='muted'>购买时间：<?php echo $data['createTime']?></small></label>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'><small class='muted'>是否支付：<?php echo $data['paystatus']==1?'是':'否'?></small></label>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'><small class='muted'>购买详情：</small></label>
                            <?php foreach (CJSON::decode($data['order_detail']) as $list):?>
                                <label class='control-label' style="margin-left:50px"><small class='muted'>商品：<?php echo $list['name']?></small></label>
                                <label class='control-label' style="margin-left:50px"><small class='muted'>商品份数：<?php echo $list['num']?></small></label>
                                <label class='control-label' style="margin-left:50px;margin-bottom:30px"><small class='muted'>商品单价：<?php echo $list['price']?></small></label>
                            <?php endforeach;?>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>