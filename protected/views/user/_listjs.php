$(function(){        	
	var _table = $('#data-table').DataTable({
		dom: 'T<"clear">lfrtip',
		tableTools: {
            "sSwfPath": "/js/libs/jquery-datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
        },
        'info': false,  //显示表格信息
		'ajax': {  
       		'url' :'/user/list',
       		'data': function(b){
       			
       		}
		},				
		'columns': [
            {'data': 'nickName', 'sDefaultContent':''},
			{'data': 'mobile', 'sDefaultContent':''},
			{'data': 'gender', 'sDefaultContent':''},
			{'data': 'email', 'sDefaultContent':''},
			{'data': 'null'},
        ],
        'columnDefs': [
			{
            	targets: 2,
            	render: function (a, b, c, d) {
            		if(c.gender == 1)
            			return '男';
            		return '女';
            	}
            },
            {
            	targets: 0,
            	render: function (a, b, c, d) {
            		var text = '';
            		if(c.portrait){
            			text = '<img src="'+c.portrait+'" style="width:24px; height:24px;"/>&nbsp;'+c.nickName;
            		} else {
            			text = '<img src="/images/account-default.png" style="width:24px; height:24px;"/>&nbsp;'+c.nickName;
            		}
            		return text;
            	}
            },
            {
                targets: 4,
                render: function (a, b, c, d) {
                    var data = {id:c.id};
                    return template('toolTemplate', data);
                }
            }
        ]
	});
	
	// $('#data-table_filter').append($('#actFilterTemplate').html());
	// $('#data-table_filter').on('change', '#act_filter', function(){
	// 	_table.ajax.reload();
	// });
	
	$('#data-table tbody').on('click','.btn', function(){
		var _this = $(this);
		if(_this.hasClass('row-edit')) {
			location.href = '/user/edit/'+_this.attr('data-id');
		}else if(_this.hasClass('row-delete')) {
			bootbox.confirm("你确定执行此操作吗?", function(result) {
			    if(result === true){
			      	CHelper.asynRequest('/user/delete', {id: _this.attr('data-id')}, {
						before: function(xhr){},
			            success: function(response){
			            	notify('success','top center','修改成功',1500);
			            	setTimeout(function(){
			            		_table.ajax.reload();
			            	},1000);
			            },
			            failure: function(msg){
			                notify('error','top center','系统异常，请重试',1500);
			            },
			            error: function(){
			            	notify('error','top center','系统异常，请重试',1500);
			            }
					});
			    }
			  }); 
		}else if(_this.hasClass('row-view')) {
			// $('#md-3d-sign').modal({
			// 	remote: '/user/view?id='+_this.attr('_id')
			// }).on('hidden', function() {
			// 	$(this).removeData('modal');
			// }).on('hidden.bs.modal', function() {
			//     $(this).removeData('bs.modal');
			// });
			// $('#md-3d-sign').addClass('md-show');
			location.href = '/user/view';
		}
	});
	
	$('#modal-tools .btn').click(function(){
		var _m = $('#modal-tools'), _id = _m.attr('_id'), type = _m.attr('type');
		if($(this).hasClass('cancel')) {
			_m.modal('hide');
			return;
		}
		if(type == 'delete') {
			CHelper.asynRequest('/user/delete', {id: _id}, {
				before: function(xhr){},
	            success: function(response){
	            	_table.ajax.reload();
	            },
	            failure: function(msg){
	                $.jGrowl('系统异常，请重试');
	            }
			});
		}
		_m.modal('hide')
	});

	$('.reload').on('click',function(){
		event.preventDefault();
		_table.ajax.reload();
		var el = $(this).parents(".widget:first");
		blockUI(el);
		window.setTimeout(function () {
		    unblockUI(el);
		}, 1000);
	});
});