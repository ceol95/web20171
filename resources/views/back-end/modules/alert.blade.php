@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@elseif (Session()->has('flash_level'))
<div class="alert bg-success alert-modal AlertBox" role="alert">
    <svg class="glyph stroked checkmark"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-checkmark"></use></svg> {!! Session::get('flash_massage') !!} 
    <a href="#" class="pull-right close"><span class="glyphicon glyphicon-remove"></span></a>
</div>

@elseif (Session()->has('flash_error'))
<div class="alert bg-danger alert-modal AlertBox" role="alert">
    <svg class="glyph stroked cancel"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-cancel"></use></svg>{!! Session::get('flash_massage') !!} <a href="#" class="pull-right close"><span class="glyphicon glyphicon-remove"></span></a>
</div>

@endif
@section('scriptAlert')
<script type="text/javascript">
    $(function () {

        $(".close").on("click", function (e) { $('.alert-modal').hide(); });
        
    });

</script>
@endsection