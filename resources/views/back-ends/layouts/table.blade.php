@extends('back-ends.layouts.master')
@section('cssPlugin')
<link rel="stylesheet" href="{{ asset('public/back-end/ace-master/assets/css/jquery-ui.min.css') }}" />
<link rel="stylesheet" href="{{ asset('public/back-end/ace-master/assets/css/bootstrap-datepicker3.min.css') }}" />
<link rel="stylesheet" href="{{ asset('public/back-end/ace-master/assets/css/ui.jqgrid.min.css') }}" />

@endsection
@section('jsPlugin')
<script src="{{ asset('public/back-end/ace-master/assets/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('public/back-end/ace-master/assets/js/jquery.jqGrid.min.js')}}"></script>
<script src="{{ asset('public/back-end/ace-master/assets/js/grid.locale-vi.js')}}"></script>

@endsection
