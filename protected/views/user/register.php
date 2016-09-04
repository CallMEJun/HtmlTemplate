<!-- Begin page -->
<div class="container">
	<div class="full-content-center animated fadeInDownBig">
		<p class="text-center"><img src="/images/naked.png" alt="Logo"></p>
		<div class="login-wrap">
			<div class="login-block">
				<div class="form-group login-input">
					<i class="fa fa-envelope overlay"></i>
					<input type="text" class="form-control text-input" placeholder="E-mail">
				</div>
				<div class="form-group login-input">
					<i class="fa fa-user overlay"></i>
					<input type="text" class="form-control text-input" placeholder="Username">
				</div>
				<div class="form-group login-input">
					<i class="fa fa-key overlay"></i>
					<input type="password" class="form-control text-input" placeholder="********">
				</div>
				<!-- <div class="checkbox"><label><input type="checkbox" class="form-control"> I accept <strong><a href='#'>Terms and Conditions</a></strong></label></div> -->
				<div class="row">
					<div class="col-sm-6">
						<a href="/login.html" class="btn btn-default btn-block">返回</a>
					</div>
					<div class="col-sm-6">
						<button type="submit" class="btn btn-success btn-block btn-register">Register</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
    $cs = Yii::app()->clientScript;
    $js = $this->renderPartial('_registerjs', null ,true);
    $cs->registerScript('register', $js, CClientScript::POS_END);
?>