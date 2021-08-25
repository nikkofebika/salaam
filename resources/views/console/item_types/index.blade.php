@extends('console.layouts.master')
@push('styles')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<link href="{{ asset('backend/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1>{{$page_title}}</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-users"></i> {{ $page_title }}</a></li>
			<li class="active">All</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<?php if(session('notification')){echo session('notification');} ?>
						<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#mdlAdd"><i class="fa fa-plus"></i> Tambah Data</button>
					</div>
					<div class="box-body">
						<div class="table-responsive">
							<table id="datatable" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Created At</th>
										<th>Updated At</th>
										<th></th>
									</tr>
								</thead>
								<tbody></tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<div class="modal fade" id="mdlAdd">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="form-add">
				<input type="hidden" name="id" value="">
				<div class="modal-body">
					<div class="form-group">
						<label>Tambah Item</label>
						<input type="text" name="item_type" class="form-control" required placeholder="Nama Item...">
						<span class="help-block" id="add-error-msg" style="display: none;">Item sudah ada</span>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="mdlEdit">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="form-edit">
				<input type="hidden" name="id" value="">
				<div class="modal-body">
					<div class="form-group">
						<label>Edit Item</label>
						<input type="text" name="item_type" value="" class="form-control" required placeholder="Nama Item...">
						<span class="help-block" id="edit-error-msg" style="display: none;">Item sudah ada</span>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endSection
@push('scripts')
<script src="{{ asset('backend/plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('backend/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function($) {
		$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
		var table = $('#datatable').DataTable({
			processing: true,
			serverSide: true,
			ajax: "{{ route('console.item_types.list') }}",
			columns: [
			{data: 'id', sortable: 'false',
			render: function (data, type, row, meta) {
				return meta.row + meta.settings._iDisplayStart + 1;
			}},
			{data: 'name', name: 'name'},
			{data: 'created_at', name: 'created_at'},
			{data: 'updated_at', name: 'updated_at'},
			{
				data: 'action',
				name: 'action',
				orderable: false, 
				searchable: false
			},
			]
		});
		$("body").on("click", ".btnDelete", function(e){
			if (confirm('Hapus Item?')) {
				$.post("{{ url('console/item_types/destroy') }}", {id: $(this).data('id')}, function(res){
					table.ajax.reload();
				})
			}
		})

		$("body").on("shown.bs.modal", "#mdlEdit", function(e){
			var mdl = $(e.relatedTarget);
			$("#form-edit input[name=id]").val(mdl.data('id'))
			$("#form-edit input[name=item_type]").val(mdl.data('name'))
		})

		$(".modal").on("hide.bs.modal", function(e){
			$("#form-add .form-group").removeClass('has-error')
			$("#add-error-msg").hide();
			$("#form-edit .form-group").removeClass('has-error')
			$("#edit-error-msg").hide();
		})

		$("#form-add").on("submit", function(e){
			e.preventDefault();
			$.post("{{ route('console.item_types.store') }}", {name: $("#form-add input[name=item_type]").val()}, function(res){
				if (res.success) {
					$("#form-add .form-group").removeClass('has-error')
					$("#add-error-msg").hide();
					$("#form-add input[name=item_type]").val("");
					$("#mdlAdd").modal('hide');
					table.ajax.reload();
				} else {
					$("#form-add .form-group").addClass('has-error')
					$("#add-error-msg").show()
				}
			})
		})

		$("#form-edit").on("submit", function(e){
			e.preventDefault();
			$.post("{{ route('console.item_types.store') }}", {id: $("#form-edit input[name=id]").val(), name: $("#form-edit input[name=item_type]").val()}, function(res){
				if (res.success) {
					$("#form-edit .form-group").removeClass('has-error')
					$("#edit-error-msg").hide();
					$("#form-edit input[name=item_type]").val("");
					$("#mdlEdit").modal('hide');
					table.ajax.reload();
				} else {
					$("#form-edit .form-group").addClass('has-error')
					$("#edit-error-msg").show()
				}
			})
		})
	});
</script>
@endpush