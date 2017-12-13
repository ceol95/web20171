@extends('back-ends.layouts.master')
@section('css')
		<link rel="stylesheet" href="{{ asset('public/back-end/ace-master/assets/css/jquery-ui.custom.min.css')}}" />
		<link rel="stylesheet" href="{{ asset('public/back-end/ace-master/assets/css/chosen.min.css')}}" />
		<link rel="stylesheet" href="{{ asset('public/back-end/ace-master/assets/css/bootstrap-datepicker3.min.css')}}" />
		<link rel="stylesheet" href="{{ asset('public/back-end/ace-master/assets/css/bootstrap-timepicker.min.css')}}" />
		<link rel="stylesheet" href="{{ asset('public/back-end/ace-master/assets/css/daterangepicker.min.css')}}" />
		<link rel="stylesheet" href="{{ asset('public/back-end/ace-master/assets/css/bootstrap-datetimepicker.min.css')}}" />
		<link rel="stylesheet" href="{{ asset('public/back-end/ace-master/assets/css/bootstrap-colorpicker.min.css')}}" />
		<script type="text/javascript" src="{!! url('public/plugin/ckeditor/ckeditor.js') !!}"></script>

@endsection
@section('js')
		<script src="{{ asset('public/back-end/ace-master/assets/js/jquery-ui.custom.min.css')}}"></script>
		<script src="{{ asset('public/back-end/ace-master/assets/js/jquery.ui.touch-punch.min.css')}}"></script>
		<script src="{{ asset('public/back-end/ace-master/assets/js/chosen.jquery.min.css')}}"></script>
		<script src="{{ asset('public/back-end/ace-master/assets/js/spinbox.min.css')}}"></script>
		<script src="{{ asset('public/back-end/ace-master/assets/js/bootstrap-datepicker.min.css')}}"></script>
		<script src="{{ asset('public/back-end/ace-master/assets/js/bootstrap-timepicker.min.css')}}"></script>
		<script src="{{ asset('public/back-end/ace-master/assets/js/moment.min.css')}}"></script>
		<script src="{{ asset('public/back-end/ace-master/assets/js/daterangepicker.min.css')}}"></script>
		<script src="{{ asset('public/back-end/ace-master/assets/js/bootstrap-datetimepicker.min.css')}}"></script>
		<script src="{{ asset('public/back-end/ace-master/assets/js/bootstrap-colorpicker.min.css')}}"></script>
		<script src="{{ asset('public/back-end/ace-master/assets/js/jquery.knob.min.css')}}"></script>
		<script src="{{ asset('public/back-end/ace-master/assets/js/autosize.min.css')}}"></script>
		<script src="{{ asset('public/back-end/ace-master/assets/js/jquery.inputlimiter.min.css')}}"></script>
		<script src="{{ asset('public/back-end/ace-master/assets/js/jquery.maskedinput.min.css')}}"></script>
		<script src="{{ asset('public/back-end/ace-master/assets/js/bootstrap-tag.min.css')}}"></script>
@endsection
