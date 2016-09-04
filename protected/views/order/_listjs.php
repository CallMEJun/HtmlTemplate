$(function(){        	
	var _table = $('#datatables').DataTable({
		'ajax': {  
       		'url' :'/user/list',
       		'data': function(b){
       			
       		}
		},				
		'columns': [
            {'data': 'id', 'sDefaultContent':''},
			{'data': 'name', 'sDefaultContent':''},
			{'data': 'mobile', 'sDefaultContent':''},
			{'data': 'email', 'sDefaultContent':''},
			{'data': 'companyName', 'sDefaultContent':''},
			{'data': 'status', 'sDefaultContent':''},
        ],
        'columnDefs': [
			{
            	targets: 1,
            	render: function (a, b, c, d) {
            		
            	}
            },
        	

            {
            	targets: 5,
            	render: function (a, b, c, d) {
            		
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
			location.href = '/user/edit/'+_this.attr('_id');
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
});