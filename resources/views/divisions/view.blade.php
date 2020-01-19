@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            You are logged in!
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Select Division</label>
                    <select class="form-control " id="division" style="width: 100%;">
                        <option value="0" disabled="true" selected="true">--Select one--</option>
                        @foreach($divisions as $division)
                            <option value="{{$division->id}}">{{$division->name}}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label>Select District</label>
                    <select class="form-control" id="district" style="width: 100%;">
                        <option value="0" disabled="true" selected="true">--select one--</option>

                    </select>
                </div>

                <div class="form-group">
                    <label>Select Thana</label>
                    <select class="form-control select2" id="thana" style="width: 100%;">
                        <option selected="selected">Select Thana</option>
                        <option>Alaska</option>

                    </select>
                </div>

                <div class="form-group">
                    <label>Select Postcode</label>
                    <select class="form-control select2" id="postCode" style="width: 100%;">
                        <option selected="selected">Select Postcode</option>
                        <option>Alaska</option>

                    </select>
                </div>

            </div>
        </div>
    </div>

@endsection


@section('js')


    <script type="text/javascript">
        $(document).ready(function () {

            /**
             * Find District from Division
             */

            $(document).on('change', '#division', function () {

                // console.log("working");
                var dist_id = $(this).val();

                var option = "";

                $.ajax({
                   type:'get',
                    url:'{{ route('district.name') }}',
                    data:{'id':dist_id},
                    success:function ($response_dist, status, http) {

                         option+='<option value="0" selected disabled>--Select one--</option>';

                        $.each( $response_dist , function( index , item ){
                            option+='<option value="'+item.id+'">'+item.name+'</option>';

                        });

                        $('#district').html(option);

                    },
                    error: function( http , status , error ) {
                        alert("Some Error Occured : " + error );
                    }

                });

            });


            /**
             * Find Thana from District
             */

            $(document).on('change', '#district', function () {

                var thana_id = $(this).val();
                var option = "";

                $.ajax({
                    type:'get',
                    url:'{{ route('thana.name') }}',
                    data:{'id':thana_id},

                    success:function ($response_thana, status, http) {

                        option+='<option value="0" selected disabled>--Select one--</option>';

                        $.each( $response_thana , function( index , item ){
                            option+='<option value="'+item.id+'">'+item.name+'</option>';

                        });

                        $('#thana').html(option);

                    },

                    error: function( http , status , error ) {
                        alert("Some Error Occured : " + error );
                    }

                });

            });


            /**
             * Find Post Code from Thana
             */


            $(document).on('change', '#thana', function () {

                var postCode_id = $(this).val();
                var option = "";

                $.ajax({
                    type:'get',
                    url:'{{ route('postCode.name') }}',
                    data:{'id':postCode_id},

                    success:function ($response_postCode, status, http) {

                        option+='<option value="0" selected disabled>--Select one--</option>';

                        $.each( $response_postCode , function( index , item ){
                            option+='<option value="'+item.id+'">'+item.code+'</option>';

                        });

                        $('#postCode').html(option);

                    },

                    error: function( http , status , error ) {
                        alert("Some Error Occured : " + error );
                    }

                });

            });






        });
    </script>

@endsection


