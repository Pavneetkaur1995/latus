@extends('layouts.app')
@section('title', 'Jokes')
@section('content')
    <div class="page-content">
        <div class="page-heading">
            <h1>Jokes</h1>
        </div>
        <div class="page-sub-section">
            <!-- Table prints three random jokes -->
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Joke</th>
                    <th scope="col">Punchline</th>
                    </tr>
                </thead>
                <tbody id="jokes-table-body">
                    <div class="loader"></div>
                    @foreach($random_jokes as $key => $value)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $value['setup'] }}</td>
                            <td>{{ $value['punchline'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Table ends -->
            <div class="page-btn-section">
                <button type="button" class="btn btn-primary refresh-btn">Refresh Jokes</button>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
    // On click refresh button it will refresh the jokes
$(".refresh-btn").on('click', function(){
    $("#jokes-table-body").html('');
    $(".loader").css('display','block');
    $(".refresh-btn").hide();
    var index = 1;
    $.ajax({
        url: "{{url('/refresh-jokes')}}",
        type: "GET",
        data: {
            _token: '{{csrf_token()}}'
        },
        dataType: 'json',                 
        success: function (result) {    
            $.each(result, function (key, value) {                          
                $("#jokes-table-body").append('<tr><td>' + index + '</td> <td>' + value.setup + '</td> <td>' + value.punchline + '</td></tr>');
                index = index + 1;
            });                         
            $(".loader").css('display','none');
            $(".refresh-btn").show();
        }
    });
});
</script>
@parent
@endsection