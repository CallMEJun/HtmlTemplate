<div id='edit-order-page' class='row-fluid'>
    <div class='row-fluid'>
        <div class='span12 box bordered-box blue-border'>
            <div class='box-content box-padding'>
                <fieldset>
                    <div class='span12'>
                        <div class='control-group'>
                            <label class='control-label'><small class='muted'><?php echo $data['name']?></small></label>
                        </div>                        
                        <div class='control-group'>
                            <label class='control-label'>
                            <small class='muted'>
                                <img src="<?php echo $data['picture']?:'/images/account-default.png' ?>" style="width:60px;height:60px">
                            </small></label>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'>
                            <small class='muted'>价格：
                                <?php echo $data['price']?>
                            </small></label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>