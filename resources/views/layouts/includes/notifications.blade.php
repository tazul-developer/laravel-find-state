<div id="notifications" class="row no-print">
    <div class="col-md-4 offset-md-8">
        @if($errors->any())
            <div class="alert alert-danger" id="fail-alert">
                @foreach ($errors->all() as $error)
                    <i class="far fa-times-circle"></i> {{ $error }}
                @endforeach
            </div>
        @endif


        @if(session('success'))
        <div class="alert alert-success" id="success-alert">
            <i class="fas fa-check"></i> {{ session('success') }}
        </div>
        @endif


        @if(session('fail'))
            <div class="alert alert-danger" id="fail-alert">
                <i class="far fa-times-circle"></i> {{ session('fail') }}
            </div>
        @endif

    </div>
</div>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    },4000);
</script>


<style type="text/css">
.alert{
    padding: .3rem .5rem;
    margin-bottom: .1rem;
}
</style>
