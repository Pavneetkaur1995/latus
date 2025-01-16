@extends('layouts.app')
@section('title', 'Jokes')
@section('content')
    <div class="container">
        <div class="row justify-content-center" id="password-container">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header">Please Enter Password</div>
                <div class="card-body">
                    <form action="{{ route('check.password') }}" method="POST" id="handleAjax">
                        @csrf
                        <div id="errors-list"></div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                            <div class="col-md-6">
                                <input type="password" id="password" class="form-control" name="password">
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Proceed
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="jokes"></div>
@endsection
@section('scripts')
<script>
    $(function() {
        $(document).on("submit", "#handleAjax", function() {
            var e = this;
            $(this).find("[type='submit']").html("Processing...");

            $.ajax({
                url: $(this).attr('action'),
                data: $(this).serialize(),
                type: "POST",
                dataType: 'json',
                success: function (data) {
                $(e).find("[type='submit']").html("Proceed");
                if (data.status) {
                    $("#password-container").html('');
                    $('#jokes').html(data.jokesPage);
                }else{
                    $(".alert").remove();
                    $.each(data.errors, function (key, val) {
                        $("#errors-list").append("<div class='alert alert-danger'>" + val + "</div>");
                    });
                }
                }
            });

            return false;
        });
    });
</script>
@parent
@endsection