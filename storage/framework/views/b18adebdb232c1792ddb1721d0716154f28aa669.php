<?php $__env->startSection('pageContent'); ?>


<div class="page-header">
	<h1>
		Dashboard
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			overview &amp; stats
		</small>
	</h1>
</div><!-- /.page-header -->

<div class="row">
	<div class="col-xs-12">
		<?php echo $__env->make('back-ends.modules.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="alert alert-success" style="display: none;">
			<button class="close" onclick="closeModal()">
				<i class="ace-icon fa fa-times"></i>
			</button>

			<i class="ace-icon fa fa-hand-o-right"></i>
			Xử lý thành công!
		</div>
		<div class="alert alert-danger" style="display: none;">
			<button class="close" onclick="closeModal()">
				<i class="ace-icon fa fa-times"></i>
			</button>

			<i class="ace-icon fa fa-hand-o-right"></i>
			Xử lý không thành công!
		</div>
		<a href="<?php echo url('admin/sanpham/add'); ?>" class="btn btn-primary">Thêm mới</a>
		<table id="grid-table"></table>

		<div id="grid-pager"></div>



		<!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->
</div><!-- /.row -->

<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Xác nhận xóa</h4>
			</div>
			<div class="modal-body">
				<p>Chắc chắn xóa mục này?</p>
			</div>
			<div class="modal-footer">
				<a href="<?php echo url('admin/sanpham/del/'); ?>" class="btn btn-primary btn-Del">Xóa</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>

			</div>
		</div>

	</div>
</div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('scriptModal'); ?>
<script type="text/javascript">
	var hrefDef = $('.btn-Del').attr('href');
	function openModal(id)
	{
		var href = hrefDef + '/'+id;
		$('.btn-Del').attr('href', href);
	}
	
	var grid_data = <?php echo $data; ?>;
	

    function closeModal(){
    		$('.alert').hide();
    	}
    jQuery(function($) {
    	var grid_selector = "#grid-table";
    	var pager_selector = "#grid-pager";
    	
    	
    	function showModal(text){
    		if(text=="OK") $('.alert-success').show(); 
    		else $('.alert-danger').show();
    	}
				

    	var parent_column = $(grid_selector).closest('[class*="col-"]');
				//resize to fit page size
				$(window).on('resize.jqGrid', function () {
					$(grid_selector).jqGrid( 'setGridWidth', parent_column.width() );
				})
				
				//resize on sidebar collapse/expand
				$(document).on('settings.ace.jqGrid' , function(ev, event_name, collapsed) {
					if( event_name === 'sidebar_collapsed' || event_name === 'main_container_fixed' ) {
						//setTimeout is for webkit only to give time for DOM changes and then redraw!!!
						setTimeout(function() {
							$(grid_selector).jqGrid( 'setGridWidth', parent_column.width() );
						}, 20);
					}
				})
				
				
				function loadData(){
					$.ajax({
						url: 'sanpham/loadAll',
						type: 'GET',
						success: function (response) {
							$(grid_selector).jqGrid('setGridParam', { 
								data: response
							}).trigger('reloadGrid');
						}
					});
				}



				var orgRowActions = $.fn.fmatter.rowactions;
				$.fn.fmatter.rowactions = function (e, act) {
					var $grid = $(this).closest("table.ui-jqgrid-btable"),
					rowid = $(this).closest("tr.jqgrow").attr("id");

					if (act === "edit") {
						$grid.jqGrid("viewGridRow", rowid);
						return false;
					}
					return orgRowActions.call(this, e, act);
				}

				jQuery(grid_selector).jqGrid({
					

					data: grid_data,
					datatype: "local",
					height: 280,
					colNames:[' ','', 'ID','Hình ảnh','Tên sản phẩm', 'Loại','Thương hiệu','Giá bán','Khuyến mãi','Trạng thái'],
					colModel:[
					{name:'myac',index:'', width:1, fixed:true, sortable:false, resize:false,
					formatter:'actions', 
					formatoptions:{ 
						    	keys:true,
								delbutton: false,//disable delete button
								editbutton:false,
								//delOptions:{recreateForm: true, beforeShowForm:beforeDeleteCallback},
							}
						},
						{name:'',index:'', width:60, sorttype:"int", editable: true,
							formatter: function (cellValue, options, rowObject) {
							    return "<a href='sanpham/edit/"+rowObject.id+"' ><i class='fa fa-pencil' aria-hidden='true'></i></a>"
							    +"<a href='#'  data-toggle='modal' data-target='#myModal' onclick='openModal("+rowObject.id+")' title='Xóa' style = 'padding-left:10px'><i class='fa fa-trash' aria-hidden='true'></i></span> </a>";
							}},
						{name:'id',index:'id', width:60, sorttype:"int"},
						{name:'images',index:'images',resizable:true, width:150,
							formatter: function (cellValue, options, rowObject) {
							    return "<img src='<?php echo url('public/uploads/products/"+cellValue+"'); ?>' alt='iphone' width='50' height='40'>";
							} },
						{name:'name',index:'name', width:150, resizable: true},
						{name:'cat_id',index:'cat_id', width:90,  resizable: true},
						{name:'brand_id',index:'brand_id', width:90,  resizable: true},
						{name:'price',index:'price', width:90,  resizable: true ,formatter:'currency', formatoptions:{decimalSeparator:",", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""},align:'right',sorttype:"float"},
						{name:'promotionPrice	',index:'promotionPrice', width:90,align:'right',  resizable: true,formatter:'currency', formatoptions:{decimalSeparator:",", thousandsSeparator: ",", decimalPlaces: 0, prefix: ""},sorttype:"float"},
						{name:'status',index:'status', width:90,  resizable: true,
							formatter: function (cellValue, options, rowObject) {
							    if(cellValue=='1') return "Còn hàng"; else return "Hết hàng";
							} },
						
						], 

						viewrecords : true,
						rowNum:10,
						rowList:[10,20,30],
						pager : pager_selector,
						altRows: true,
					//toppager: true,
					
					multiselect: true,
					//multikey: "ctrlKey",
					multiboxonly: true,

					loadComplete : function() {
						var table = this;
						setTimeout(function(){
							//styleCheckbox(table);
							
							//updateActionIcons(table);
							updatePagerIcons(table);
							enableTooltips(table);
						}, 0);
					},

					editurl: "nhacungcap/edit",//nothing is saved
					caption: "Bảng danh sách nhãn hiệu"


				});
				$(window).triggerHandler('resize.jqGrid');//trigger window resize to make the grid get the correct size
				
				//switch element when editing inline
				function aceSwitch( cellvalue, options, cell ) {
					setTimeout(function(){
						$(cell) .find('input[type=checkbox]')
						.addClass('ace ace-switch ace-switch-5')
						.after('<span class="lbl"></span>');
					}, 0);
				}
				//enable datepicker
				function pickDate( cellvalue, options, cell ) {
					setTimeout(function(){
						$(cell) .find('input[type=text]')
						.datepicker({format:'yyyy-mm-dd' , autoclose:true}); 
					}, 0);
				}


				//navButtons
				jQuery(grid_selector).jqGrid('navGrid',pager_selector,
					{ 	//navbar options
						edit: false,
						editicon : 'ace-icon fa fa-pencil blue',
						add: false,
						addicon : 'ace-icon fa fa-plus-circle purple',
						del: true,
						delicon : 'ace-icon fa fa-trash-o red',
						search: true,
						searchicon : 'ace-icon fa fa-search orange',
						refresh: true,
						refreshicon : 'ace-icon fa fa-refresh green',
						view: false,
						viewicon : 'ace-icon fa fa-search-plus grey'
					},
					{},
				    {},
				    {
						//delete record form
						url: "sanpham/del",
						recreateForm: true,
						mtype:'GET',
						beforeShowForm : function(e) {
							var form = $(e[0]);
							if(form.data('styled')) return false;
							
							form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
							style_delete_form(form);
							
							form.data('styled', true);
						},
						
						afterComplete :  function(e) {
							
							showModal(e.responseText);
							loadData();
						},
					},
					{
						//search form
						recreateForm: true,
						afterShowSearch: function(e){
							var form = $(e[0]);
							form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />')
							style_search_form(form);
						},
						afterRedraw: function(){
							style_search_filters($(this));
						}
						,
						multipleSearch: true,
						
					},
					{
						//view record form
						recreateForm: true,
						beforeShowForm: function(e){
							var form = $(e[0]);
							form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />')
						}
					}
					)
				
				function style_delete_form(form) {
					var buttons = form.next().find('.DelTable .fm-button');
					form.find('.DelTable').after('<?php echo csrf_field(); ?>');
					form.find('#DelData').attr('name','DelData');
					buttons.addClass('btn btn-sm btn-white btn-round').find('[class*="-icon"]').hide();//ui-icon, s-icon
					buttons.eq(0).addClass('btn-danger').prepend('<i class="ace-icon fa fa-trash-o"></i>');
					buttons.eq(1).addClass('btn-default').prepend('<i class="ace-icon fa fa-times"></i>')
				}
				
				function style_search_filters(form) {
					form.find('.delete-rule').val('X');
					form.find('.add-rule').addClass('btn btn-xs btn-primary');
					form.find('.add-group').addClass('btn btn-xs btn-success');
					form.find('.delete-group').addClass('btn btn-xs btn-danger');
				}
				function style_search_form(form) {
					var dialog = form.closest('.ui-jqdialog');
					var buttons = dialog.find('.EditTable')
					buttons.find('.EditButton a[id*="_reset"]').addClass('btn btn-sm btn-info').find('.ui-icon').attr('class', 'ace-icon fa fa-retweet');
					buttons.find('.EditButton a[id*="_query"]').addClass('btn btn-sm btn-inverse').find('.ui-icon').attr('class', 'ace-icon fa fa-comment-o');
					buttons.find('.EditButton a[id*="_search"]').addClass('btn btn-sm btn-purple').find('.ui-icon').attr('class', 'ace-icon fa fa-search');
				}
				
				function beforeDeleteCallback(e) {
					var form = $(e[0]);
					if(form.data('styled')) return false;
					
					form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
					style_delete_form(form);
					
					form.data('styled', true);
				}
				
				function beforeEditCallback(e) {
					var form = $(e[0]);

					form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
					style_edit_form(form);
					
				}



				
				
				//replace icons with FontAwesome icons like above
				function updatePagerIcons(table) {
					var replacement = 
					{
						'ui-icon-seek-first' : 'ace-icon fa fa-angle-double-left bigger-140',
						'ui-icon-seek-prev' : 'ace-icon fa fa-angle-left bigger-140',
						'ui-icon-seek-next' : 'ace-icon fa fa-angle-right bigger-140',
						'ui-icon-seek-end' : 'ace-icon fa fa-angle-double-right bigger-140'
					};
					$('.ui-pg-table:not(.navtable) > tbody > tr > .ui-pg-button > .ui-icon').each(function(){
						var icon = $(this);
						var $class = $.trim(icon.attr('class').replace('ui-icon', ''));
						
						if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
					})
				}

				function enableTooltips(table) {
					$('.navtable .ui-pg-button').tooltip({container:'body'});
					$(table).find('.ui-pg-div').tooltip({container:'body'});
				}

				//var selr = jQuery(grid_selector).jqGrid('getGridParam','selrow');

				$(document).one('ajaxloadstart.page', function(e) {
					$.jgrid.gridDestroy(grid_selector);
					$('.ui-jqdialog').remove();
				});
			});
		</script>

		<?php $__env->stopSection(); ?>

<?php echo $__env->make('back-ends.layouts.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>