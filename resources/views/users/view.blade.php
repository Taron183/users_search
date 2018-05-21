@extends('layouts.default')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content">
        <div class="container">
            <div class="box box-primary view_content">
                <div class="box-header with-border">
                </div>
                <div>
                    <div class="col-xs-12">
                        <p class="lead">User {{ $item->first_name }}</p>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>First name</th>
                                        <td>{{ $item->first_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Last name</th>
                                        <td>{{ $item->last_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Keywords</th>
                                        <td>{{ $item->keywords }}</td>
                                    </tr>
                                    <tr>
                                        <th>Resume</th>
                                        @if($item->file)
                                            <td><a href="{{route('download.file',['id'=>$item->id])}}">Download file</a></td>
                                        @else
                                            <td></td>
                                        @endif
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group back_button_pr">
                        <a href="{{route('users.index')}}" class="btn btn-default btn-flat pull-right">
                            <i class="fa fa-reply"></i> Back
                        </a>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </section>
@endsection


