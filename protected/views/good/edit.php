<div class='page-header'>
    <h1 class='pull-left'>
        <i class='icon-user'></i> <span>商品信息</span>
    </h1>
</div>
<input id='action-type'  type='hidden' value='<?php echo $this->action->id ?>'/>
<div class='row-fluid'>
    <div class='span12 box bordered-box blue-border'>
        <div class='box-content box-double-padding'>
        <form id='edit_base_form' action='/good/create' method='post' class='form' style='margin-bottom: 0;'>
            <input type='hidden' name='id' value='<?php echo $data['id'] ?>'/>
            <input type='hidden' name='picture' id="picture" value='<?php echo $data['picture'] ?>'/>
            
            <fieldset>
                <div class='span10'>
                    <div class='control-group'>
                        <label class='control-label'>商品名称 <span class='text-red'>*</span></label>
                        <div class='controls'>
                            <input class='span2' name='name' value='<?php echo $data['name']?>' type='text' data-rule-required='true' data-msg-required='请输入名字'/>
                        </div>
                    </div>
                    <div class='control-group'>
                        <label class='control-label'>商品价格 <span class='text-red'>*</span></label>
                        <div class='controls'>
                            <input class='span2' name='price' value='<?php echo $data['price']?>' type='text' data-rule-required='true' data-msg-required='请输入名字'/>
                        </div>
                    </div>
                    <div class='control-group'>
                        <label class='control-label'>商品图片</label>
                        <div class='controls' id='picture_container'>
                            <?php if($data['picture']):?>
                                <img id='picture_img' style='width:150px;height:150px;border-radius: 100%' src='<?php echo $data['picture'] ?>' />
                            <?php else:?>
                                <img id='picture_img' style='width:150px;height:150px;border-radius: 100%' src='http://naked.oss-cn-shanghai.aliyuncs.com/background.png'>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </fieldset>
            
            <div style='margin-bottom: 0;'>
                <div class='text-left'>
                    <button id='btn-save' class='btn btn-primary' type='submit'> 保存 </button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    var domain = '<?php echo Assist::getOSSToken()['domain'] ?>',
        token = '<?php echo Assist::getOSSToken()['uptoken']?>';
        token = eval('(' + token + ')');
    
</script>
<?php
    $cs = Yii::app()->clientScript;
    $js = $this->renderPartial('_editjs', null ,true);
    $cs->registerScript('activity', $js, CClientScript::POS_END);
?>