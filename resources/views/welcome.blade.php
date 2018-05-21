@extends('layouts.default')
@section('style')
    <style>
        .jumbotron {
        background-color: #f4511e;
        color: #fff;
        padding: 100px 25px;
        font-family: Montserrat, sans-serif;
        }
     </style>
@endsection
@section('content')
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('users.index')}}">Users</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Users</h1>
            <p>Search panel</p>
            <form class="form-inline">
                <div class="form-group col-xs-3">
                    <label for="first_name">First name:</label>
                    <input type="text" class="form-control first_name" id="first_name">
                </div>
                <div class="form-group col-xs-3">
                    <label for="last_name">Last name:</label>
                    <input type="text" class="form-control last_name" id="last_name">
                </div>
                <div class="form-group col-xs-3">
                    <label for="keywords">Keywords:</label>
                    <input type="text" class="form-control keywords" id="keywords">
                </div>
                <div class="form-group col-xs-3" style="margin-top: 25px; margin-bottom: 25px">
                    <button type="button" class="btn btn-primary search-user">Search</button>
                </div>

            </form>
        </div>
    </div>
    <div class="container">
        <h2>Result search</h2>

        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Keywords</th>
                    <th>Resume</th>
                </tr>
                </thead>
                <tbody class="table-body">

                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('.search-user').click(function () {
            $('.table-body').empty()
            $('.no-result').remove()
            var first_name =  $('.first_name').val();
            var last_name = $('.last_name').val();
            var keywords = $('.keywords').val();

           if(first_name || last_name || keywords){
               $.ajax({
                   url:'{{route('users.search')}}',
                   type: 'POST',
                   data: {
                       first_name: first_name,
                       last_name: last_name,
                       keywords:keywords
                   }, headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   },

                   success: function (result) {
                       var users = JSON.parse(result);


                       if(users.length > 0){
                           $.each(users, function (index, value) {
                               url = '{{ route("download.file", ":id") }}';
                               url = url.replace(':id', value.id);

                               $( ".table-body" ).append( '<tr class="accordian_container">' +
                                   '<th href="#"">#</th>' +
                                   '<th>' +value.first_name+'</th>' +
                                   '<th>' +value.last_name+'</th>' +
                                   '<th >' +value.keywords+'</th>' +
                                   '<td><a href="'+url+'">Download file</a></td>'+
                                   '</tr>');

                           });
                       }else{
                           $( ".table-responsive" ).append('<p class="no-result" style="text-align:center; font-size: 22px;">No Result</p>')
                       }

                   }

               })

           }else(
               $( ".form-inline" ).append('<p class="no-result" style="text-align:center; font-size: 22px; color: red;">At least one of the fields must be filled</p>')
           )




        })
    </script>
@endsection
