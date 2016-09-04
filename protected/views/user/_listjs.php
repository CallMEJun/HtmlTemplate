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
                    var str = '';
                    str+='<div class="btn-group btn-group-xs">';
                    str+='<a data-toggle="tooltip" title="编辑" class="btn btn-default row-edit" data-id="'+c.id+'"><i class="fa fa-edit"></i></a>';
                    str+='<a data-toggle="tooltip" title="view" class="btn btn-default row-view" data-id="'+c.id+'"><i class="fa fa-user"></i></a>';
                    str+='</div>';
                    return str;
                }
            }
        ]
	});
	
	$('#data-table_filter').append($('#actFilterTemplate').html());
	$('#data-table_filter').on('change', '#act_filter', function(){
		_table.ajax.reload();
	});
	
	$('#data-table tbody').on('click','.btn', function(){
		var _this = $(this);
		if(_this.hasClass('row-edit')) {
			location.href = '/user/edit/'+_this.attr('data-id');
		}else if(_this.hasClass('row-delete')) {
			$('#modal-tools').attr({_id:_this.attr('_id'), type:'delete'}).modal('show');
		}else if(_this.hasClass('row-view')) {
			$('#viewModal').modal({
				remote: '/user/view?id='+_this.attr('_id')
			}).on('hidden', function() {
				$(this).removeData('modal');
			}).on('hidden.bs.modal', function() {
			    $(this).removeData('bs.modal');
			});
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