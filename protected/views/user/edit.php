<div class="widget">
	<input type="hidden" class="action" value="<?php echo $this->action->id?>">
	<div class="widget-header transparent">
		<h2><strong>用户编辑</strong></h2>
		<div class="additional-btn">
			<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
			<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
			<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
		</div>
	</div>
	<div class="widget-content padding">
		<form class="form-horizontal" role="form" id="user-form">
			<input type="hidden" name="id" value="<?php echo $data['id']?>">
		  <div class="form-group">
			<label for="input-text" class="col-sm-2 control-label">用户昵称</label>
			<div class="col-sm-10">
			  <input type="text" name="nickName" class="form-control" id="input-text" placeholder="昵称" value="<?php echo $data['nickName']?>">
			</div>
		  </div>
		  <div class="form-group">
			<label for="input-text-help" class="col-sm-2 control-label">手机号</label>
			<div class="col-sm-10">
			  <input type="text" name="mobile" class="form-control" id="input-text-help" placeholder="手机号" value="<?php echo $data['mobile']?>">
			</div>
		  </div>
		  <div class="form-group">
			<label for="input-text" class="col-sm-2 control-label">出生年月</label>
			<div class="col-sm-10">
			  <input type="text" name="birthday" class="form-control" id="birthday" placeholder="出生年月" readonly value="<?php if($data['birthday']!='0000-00-00') echo $data['birthday'];?>">
			</div>
		  </div>
		  <div class="form-group">
			<label for="input-text" class="col-sm-2 control-label">电子邮件</label>
			<div class="col-sm-10">
			  <input type="text" name="email" class="form-control" id="input-text" placeholder="电子邮件" value="<?php echo $data['email']?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="col-sm-2 control-label">性别</label>
			<div class="col-sm-10">
				<div class="radio iradio">
				  <label>
					<input type="radio" name="gender" id="male" value="1" <?php if($data['gender'] == 1) echo "checked";?> >
					男
				  </label>
				</div>
				<div class="radio iradio">
				  <label>
					<input type="radio" name="gender" id="female" value="2" <?php if($data['gender'] == 2) echo "checked";?> >
					女
				  </label>
				</div>
			</div>
		  </div>
		  <div class="form-group">
			<label for="input-text" class="col-sm-2 control-label">职业</label>
			<div class="col-sm-10">
			  <input type="text" name="work" class="form-control" id="input-text" placeholder="职业" value="<?php echo $data['work']?>">
			</div>
		  </div>
		  <div class="form-group">
			<label for="input-text" class="col-sm-2 control-label">头衔</label>
			<div class="col-sm-10">
			  <input type="text" name="title" class="form-control" id="input-text" placeholder="头衔" value="<?php echo $data['title']?>">
			</div>
		  </div>
		  <div class="form-group">
			<label class="col-sm-2 control-label">公司</label>
			<div class="col-sm-10">
				<a href="#" id="country" data-type="select2" data-pk="1" data-value="<?php echo $data['company']?>" data-title="Select country"></a>
				<input type="hidden" class="company" name="company" value="<?php echo $data['company']?>">
			</div>
		  </div>
		  <div class="form-group">
			<label for="input-text" class="col-sm-2 control-label">技能</label>
			<div class="col-sm-10">
			  <input type="text" name="skills" class="form-control" id="input-text" placeholder="技能" value="<?php echo $data['skills']?>">
			</div>
		  </div>
		  <div class="form-group">
			<label for="input-text" class="col-sm-2 control-label">爱好</label>
			<div class="col-sm-10">
			  <input type="text" name="interests" class="form-control" id="input-text" placeholder="爱好" value="<?php echo $data['interests']?>">
			</div>
		  </div>
		  <div class="form-group">
			<label for="input-text" class="col-sm-2 control-label">个人网站</label>
			<div class="col-sm-10">
			  <input type="text" name="website" class="form-control" id="input-text" placeholder="个人网站" value="<?php echo $data['website']?>">
			</div>
		  </div>
		  <div class="form-group">
			<label for="input-text" class="col-sm-2 control-label">微信</label>
			<div class="col-sm-10">
			  <input type="text" name="wechatid" class="form-control" id="input-text" placeholder="微信" value="<?php echo $data['wechatid']?>">
			</div>
		  </div>
		  <div class="form-group">
			<label for="input-text" class="col-sm-2 control-label">Facebook</label>
			<div class="col-sm-10">
			  <input type="text" name="facebookid" class="form-control" id="input-text" placeholder="Facebook" value="<?php echo $data['facebookid']?>">
			</div>
		  </div>
		  <div class="form-group">
			<label for="input-text" class="col-sm-2 control-label">Twitter</label>
			<div class="col-sm-10">
			  <input type="text" name="twitterid" class="form-control" id="input-text" placeholder="Twitter" value="<?php echo $data['twitterid']?>">
			</div>
		  </div>
		  <div class="form-group">
			<label for="input-text" class="col-sm-2 control-label">LinkedIn</label>
			<div class="col-sm-10">
			  <input type="text" name="linkedinid" class="form-control" id="input-text" placeholder="LinkedIn" value="<?php echo $data['linkedinid']?>">
			</div>
		  </div>
		  <div class="form-group">
			<label for="input-text" class="col-sm-2 control-label">Instagram</label>
			<div class="col-sm-10">
			  <input type="text" name="instagramid" class="form-control" id="input-text" placeholder="Instram" value="<?php echo $data['instagramid']?>">
			</div>
		  </div>	  
		  <div class="form-group">
			<label class="col-sm-2 control-label">介绍</label>
			<div class="col-sm-10">
			  <textarea name="description" class="summernote form-control" style="resize:none;" rows="10" ><?php echo $data['description']?></textarea>
			</div>
		  </div>
		  <div class="form-group">
			<label class="col-sm-2 control-label"></label>
			<div class="col-sm-10">
			  <button class="btn btn-blue-2 btn-submit" type="submit">submit</button>
			</div>
		  </div>
		</form>
	</div>
</div>
<script src='/js/jedate.js'></script>
<script type="text/javascript">
    
    jeDate({
        dateCell:"#birthday",
        format:"YYYY-MM-DD",
        isTime:false,
    });

    var company = <?php echo $companyList;?>;
    // jeDate({
    //     dateCell:"#end",
    //     format:"YYYY-MM-DD hh:mm:ss",
    //     isTime:true,
    // });
</script>
<?php
    $cs = Yii::app()->clientScript;
    $js = $this->renderPartial('_editjs', null ,true);
    $cs->registerScript('edit', $js, CClientScript::POS_END);
?>