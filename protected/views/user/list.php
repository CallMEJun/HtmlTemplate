<div class="row">
	<div class="col-md-12">
		<div class="widget">
			<div class="widget-header">
				<h2><strong>用户列表</strong></h2>
				<div class="additional-btn">
					<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
					<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
				</div>
			</div>
			<div class="widget-content">
			<br>					
				<div class="table-responsive">
					<form class='form-horizontal' role='form'>
					<table id="data-table" class="table table-striped table-bordered" cellspacing="0" width="100%">
					    <thead>
					        <tr>
					            <th>用户姓名</th>
					            <th>联系方式</th>
					            <th>性别</th>
					            <th>邮箱</th>
					            <th>操作</th>
					        </tr>
					    </thead>
					    <tbody>
					        <!-- <tr align="center"><td colspan="6">正在加载...</td></tr> -->
					    </tbody>
					</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- tools temp -->
<script id='toolTemplate' type='text/html'>
    <div class='text-left'>
        <a class='btn row-view btn-info btn-mini has-tooltip' _id='{{id}}' title='查看详情'> <i class='icon-eye-open'></i></a> 
        <a class='btn row-edit btn-primary btn-mini has-tooltip' _id='{{id}}' title='编辑'> <i class='icon-edit'></i> </a>
        <a class='btn row-delete btn-danger btn-mini has-tooltip' _id='{{id}}' title='删除'> <i class='icon-trash'></i> </a>      
    </div>
</script>

<div class="md-modal md-3d-sign" id="md-3d-sign">
	<div class="md-content">
		<h3>Modal Dialog</h3>
		<div>
			<p>This is a modal window. You can do the following things with it:</p>
			<ul>
				<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
				<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
				<li><strong>Close:</strong> click on the button below to close the modal.</li>
			</ul>
			<p>
			<button class="btn btn-danger md-close">Close me!</button>
			<button class="btn btn-success md-close">Some button</button>
			</p>
		</div>
	</div><!-- End div .md-content -->
</div>
<?php
    $cs = Yii::app()->clientScript;
    $js = $this->renderPartial('_listjs', null ,true);
    $cs->registerScript('list', $js, CClientScript::POS_END);
?>