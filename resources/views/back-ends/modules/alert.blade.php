
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@elseif (Session()->has('flash_level'))
    <div class="alert alert-success" >
            <button class="close" onclick="closeModal()">
                <i class="ace-icon fa fa-times"></i>
            </button>

            <i class="ace-icon fa fa-hand-o-right"></i>
            Xử lý thành công!
        </div>

@elseif (Session()->has('flash_error'))
    <div class="alert alert-danger" >
            <button class="close" onclick="closeModal()">
                <i class="ace-icon fa fa-times"></i>
            </button>

            <i class="ace-icon fa fa-hand-o-right"></i>
            Xử lý không thành công!
        </div>

@endif
@section('scriptAlert')
<script type="text/javascript">
    $(function () {

        $(".close").on("click", function (e) { $('.alert-modal').hide(); });
        
    });

</script>
@endsection

