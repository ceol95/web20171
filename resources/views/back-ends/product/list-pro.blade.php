@extends('back-ends.layouts.table')
@section('pageContent')


<div class="page-header">
	<h1>
		Sản phẩm
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Tổng quan
		</small>
	</h1>
</div><!-- /.page-header -->

<div class="row">
	<div class="col-xs-12">

		<div class="alert alert-info">
			<button class="close" data-dismiss="alert">
				<i class="ace-icon fa fa-times"></i>
			</button>

			<i class="ace-icon fa fa-hand-o-right"></i>
			Please note that demo server is not configured to save the changes, therefore you may see an error message.
		</div>

		<table id="grid-table"></table>

		<div id="grid-pager"></div>



		<!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->
</div><!-- /.row -->


@endsection
@section('scriptModal')
<script type="text/javascript">
	var grid_data = {!!$data!!};
	//selRowId = myGrid.jqGrid ('getGridParam', 'selrow'),
    //celValue = myGrid.jqGrid ('getCell', selRowId, 'columnName');
	

	jQuery(function($) {
		var grid_selector = "#grid-table";
		var pager_selector = "#grid-pager";


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
				
				//if your grid is inside another element, for example a tab pane, you should use its parent's width:
				/**
				$(window).on('resize.jqGrid', function () {
					var parent_width = $(grid_selector).closest('.tab-pane').width();
					$(grid_selector).jqGrid( 'setGridWidth', parent_width );
				})
				//and also set width when tab pane becomes visible
				$('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
				  if($(e.target).attr('href') == '#mygrid') {
					var parent_width = $(grid_selector).closest('.tab-pane').width();
					$(grid_selector).jqGrid( 'setGridWidth', parent_width );
				  }
				})
				*/
				
				function loadData(){
					$.ajax({
						url: 'nhanhieu/loadAll',
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
					height: 250,
					colNames:[' ','Nhan', 'ID','Nhãn hiệu','Ngày tạo', 'Ngày sửa'],
					colModel:[
					{name:'myac',index:'', width:40, fixed:true, sortable:false, resize:false,
					formatter:'actions', 
					formatoptions:{ 
						    keys:true,
								//delbutton: false,//disable delete button
								editbutton:false,
								//delOptions:{recreateForm: true, beforeShowForm:beforeDeleteCallback},
								
								onEdit:function(rowid) {
                             		alert("in onEdit: rowid="+rowid+"\nWe don't need return anything");
                         		},
                         		editformbutton:true, 
                         		editOptions:{recreateForm: true, beforeShowForm:beforeEditCallback},

							}
						},
						{name:'a',index:'a', width:60, sorttype:"int", editable: true,formatter: function (cellValue, options, rowObject) {
							    return "<a href='danhmuc/edit/"+rowObject.id+"' ><i class='fa fa-pencil' aria-hidden='true'></i></a>";
							}},
						{name:'id',index:'id', width:60, sorttype:"int", editable: true},
						{name:'name',index:'name', width:150,editable: true,editoptions:{size:"20",maxlength:"30"},editrules:{ required:true}},
						{name:'created_at',index:'created_at', width:70,formatter:"date", editable: false},
						{name:'updated_at',index:'updated_at', width:90,sorttype:"date", editable: false,formatter:"date"}
						
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
							styleCheckbox(table);
							
							updateActionIcons(table);
							updatePagerIcons(table);
							enableTooltips(table);
						}, 0);
					},

					editurl: "nhanhieu/edit",//nothing is saved
					caption: "Bảng danh sách nhãn hiệu"

					//,autowidth: true,


					/**
					,
					grouping:true, 
					groupingView : { 
						 groupField : ['name'],
						 groupDataSorted : true,
						 plusicon : 'fa fa-chevron-down bigger-110',
						 minusicon : 'fa fa-chevron-up bigger-110'
					},
					caption: "Grouping"
					*/

				});
				$(window).triggerHandler('resize.jqGrid');//trigger window resize to make the grid get the correct size
				
				//jQuery(grid_selector).jqGrid('hideCol',["created_at"]);

				//enable search/filter toolbar
				//jQuery(grid_selector).jqGrid('filterToolbar',{defaultSearch:true,stringResult:true})
				//jQuery(grid_selector).filterToolbar({});


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
						edit: true,
						editicon : 'ace-icon fa fa-pencil blue',
						add: true,
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
					{
						//edit record form
						closeAfterEdit: true,
						//width: 700,
						url: "nhanhieu/edit",
						recreateForm: true,
						beforeShowForm : function(e) {
							var form = $(e[0]);
							form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
							style_edit_form(form);
						},
						afterComplete :  function(e) {
							alert(e.responseText);
							loadData();
						},
						ajaxEditOptions: {
							beforeSend: function(jqXHR) {
				                var csrf_token = $('input[name="_token"]').attr('value'); // any way to get
				                jqXHR.setRequestHeader('X-CSRF-Token', csrf_token);
				            }
        				},

					},
					{
						//new record form
						//width: 700,
						onClickButton: function (row) {
				                editrowindex = row;
				                var id = $("#jqxgrid").jqxGrid('getcellvalue', row, "CustomerID");
				                //window.location = '/Customers/Edit/?id=' + id;
				                alert(id);
				        },
						url: "nhanhieu/add",
						closeAfterAdd: true,
						recreateForm: true,
						viewPagerButtons: false,
						beforeShowForm : function(e) {
							var form = $(e[0]);
							form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar')
							.wrapInner('<div class="widget-header" />')
							style_edit_form(form);
						},
						ajaxAddOptions: {
							beforeSend: function(jqXHR) {
				                var csrf_token = $('input[name="_token"]').attr('value'); // any way to get
				                jqXHR.setRequestHeader('X-CSRF-Token', csrf_token);
				            }
        				},
        				afterComplete :  function(e) {
							alert(e.responseText);
							loadData();
						},
						
					},
					{
						//delete record form
						url: "nhanhieu/del",
						recreateForm: true,
						beforeShowForm : function(e) {
							var form = $(e[0]);
							if(form.data('styled')) return false;
							
							form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
							style_delete_form(form);
							
							form.data('styled', true);
						},
						onClick : function(e) {
							//alert(1);
						}
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
						/**
						multipleGroup:true,
						showQuery: true
						*/
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


				
				function style_edit_form(form) {
					//enable datepicker on "sdate" field and switches for "stock" field
					//form.find('input[name=sdate]').datepicker({format:'yyyy-mm-dd' , autoclose:true})
					
					//form.find('input[name=stock]').addClass('ace ace-switch ace-switch-5').after('<span class="lbl"></span>');
							   //don't wrap inside a label element, the checkbox value won't be submitted (POST'ed)
							  //.addClass('ace ace-switch ace-switch-5').wrap('<label class="inline" />').after('<span class="lbl"></span>');


					//update buttons classes
					var buttons = form.next().find('.EditButton .fm-button');
					form.find('.EditTable').after('{!! csrf_field() !!}');
					buttons.addClass('btn btn-sm').find('[class*="-icon"]').hide();//ui-icon, s-icon
					buttons.eq(0).addClass('btn-primary').prepend('<i class="ace-icon fa fa-check"></i>');
					buttons.eq(1).prepend('<i class="ace-icon fa fa-times"></i>')
					
					buttons = form.next().find('.navButton a');
					buttons.find('.ui-icon').hide();
					buttons.eq(0).append('<i class="ace-icon fa fa-chevron-left"></i>');
					buttons.eq(1).append('<i class="ace-icon fa fa-chevron-right"></i>');		
				}

				function style_delete_form(form) {
					var buttons = form.next().find('.EditButton .fm-button');
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



				//it causes some flicker when reloading or navigating grid
				//it may be possible to have some custom formatter to do this as the grid is being created to prevent this
				//or go back to default browser checkbox styles for the grid
				function styleCheckbox(table) {
				/**
					$(table).find('input:checkbox').addClass('ace')
					.wrap('<label />')
					.after('<span class="lbl align-top" />')
			
			
					$('.ui-jqgrid-labels th[id*="_cb"]:first-child')
					.find('input.cbox[type=checkbox]').addClass('ace')
					.wrap('<label />').after('<span class="lbl align-top" />');
					*/
				}
				

				//unlike navButtons icons, action icons in rows seem to be hard-coded
				//you can change them like this in here if you want
				function updateActionIcons(table) {
					/**
					var replacement = 
					{
						'ui-ace-icon fa fa-pencil' : 'ace-icon fa fa-pencil blue',
						'ui-ace-icon fa fa-trash-o' : 'ace-icon fa fa-trash-o red',
						'ui-icon-disk' : 'ace-icon fa fa-check green',
						'ui-icon-cancel' : 'ace-icon fa fa-times red'
					};
					$(table).find('.ui-pg-div span.ui-icon').each(function(){
						var icon = $(this);
						var $class = $.trim(icon.attr('class').replace('ui-icon', ''));
						if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
					})
					*/
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

		@endsection
