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
    <div class='btn-group btn-group-xs'>
        <a data-toggle="tooltip" title="编辑" class="btn btn-primary row-edit" data-id="{{id}}"><i class="fa fa-edit"></i></a>
        <a data-toggle="tooltip" title="查看详情" class="btn btn-default row-view" data-id="{{id}}"><i class="fa fa-user"></i></a>
        <a data-toggle="tooltip" title="删除" class="btn btn-warning row-delete" data-id="{{id}}"><i class="fa fa-trash-o"></i></a>      
    </div>
</script>

<?php
    $cs = Yii::app()->clientScript;
    $js = $this->renderPartial('_listjs', null ,true);
    $cs->registerScript('list', $js, CClientScript::POS_END);
?>