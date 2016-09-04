<div class="container">
	<div class="full-content-center">
		<p class="text-center"><img src="/images/yrwork-logo.png" alt="Logo" style="max-width:360px;"></p>
		<div class="login-wrap animated flipInX">
			<div class="login-block">
				<img src="/images/account-default.png" class="img-circle not-logged-avatar">
				<div class="form-group login-input">
					<i class="fa fa-user overlay"></i>
					<input type="text" class="form-control text-input username" placeholder="用户名">
				</div>
				<div class="form-group login-input">
					<i class="fa fa-key overlay"></i>
					<input type="password" class="form-control text-input password" placeholder="********">
				</div>
				
				<div class="row">
					<div class="col-sm-6">
						<button type="submit" class="btn btn-success btn-block btn-login">登陆</button>
					</div>
					<div class="col-sm-6">
						<a href="register.html" class="btn btn-default btn-block">注册</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
    $cs = Yii::app()->clientScript;
    $js = $this->renderPartial('_js', null ,true);
    $cs->registerScript('login', $js, CClientScript::POS_END);
?>