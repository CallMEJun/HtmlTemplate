<div id='edit-order-page' class='row-fluid'>
	<div class='row-fluid'>
		<div class='span12 box bordered-box blue-border'>
			<div class='box-content box-padding'>
				<fieldset>
					<div class='span12'>
						<div class='control-group'>
							<label class='control-label'>用户编号： <small class='muted'><?php echo $data['id']?></small></label>
						</div>
						<div class='control-group'>
							<label class='control-label'>用户： <small class='muted'><?php echo $data['nickName']?></small></label>
						</div>
					<?php if($createProduct) :?>
						<div class='control-group'>
							<label class='control-label'>用户创建人： <small class='muted'><?php echo $createProduct['adminName']?></small></label>
						</div>
						<div class='control-group'>
							<label class='control-label'>用户创建时间： <small class='muted'><?php echo $createProduct['createTime']?></small></label>
						</div>
					<?php endif;?>
					<?php if($updateProduct) :?>
						<div class='control-group'>
							<label class='control-label'>用户修改人： <small class='muted'><?php echo $updateProduct['adminName']?></small></label>
						</div>
						<div class='control-group'>
							<label class='control-label'>用户修改时间： <small class='muted'><?php echo $updateProduct['updateTime']?></small></label>
						</div>
					<?php endif;?>
					<?php if($deleteProduct) :?>
						<div class='control-group'>
							<label class='control-label'>用户删除人： <small class='muted'><?php echo $deleteProduct['adminName']?></small></label>
						</div>
						<div class='control-group'>
							<label class='control-label'>用户删除时间： <small class='muted'><?php echo $deleteProduct['deleteTime']?></small></label>
						</div>
					<?php endif;?>
					</div>
				</fieldset>
			</div>
		</div>
	</div>
</div>