@extends('layouts.default')

@section('content')
    @include('partials.message')

<div class="container">
  <div class="box box-info">
    <div class="box-header">
        <h3 class="box-title">Users( {{ count($items) }} )</h3>
        <p class="lead pull-right"><a class="btn btn-block btn-info btn-flat" href="{{ route('users.create') }}">Add User</a></p>
    </div>
  <!-- /.box-header -->
    <div class="box-body">
        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                        <thead>
                            <tr role="row">
                              <th></th>
                              <th>First name</th>
                              <th>Last name</th>
                              <th>Keywords</th>
                              <th>Resume</th>

                              <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody id="sortable">
                            @foreach($items as $item)
                                <tr  data-location="{{ $item->location }}" data-id="{{ $item->id}}" role="row" class="odd">
                                    <td class="ui-state-default"><div class="three-dots"></div></td>
                                    <td class="ui-state-default">{{$item->first_name}}</td>
                                    <td class="ui-state-default">{{$item->last_name}}</td>
                                    <td class="ui-state-default">{{$item->keywords}}</td>
                                    @if($item->file)
                                        <td><a href="{{route('download.file',['id'=>$item->id])}}">Download file</a></td>
                                    @else
                                        <td></td>
                                    @endif
                                    <td class="ui-state-default">
                                        <div class="btn-group">
                                            <a class="btn btn-info"
                                               href="{{ route('users.show', $item->id)}}"
                                            >View</a>

                                            <a class="btn btn-warning"
                                               href="{{ route('users.edit', $item->id)}}"

                                            >Edit</a>

                                            @include("partials.delete-modal",['id'=>$item->id,'route'=>'users'])
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="form-group back_button_pr">
                <a href="{{route('index')}}" class="btn btn-default btn-flat pull-right">
                    <i class="fa fa-reply"></i> Back To Home
                </a>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="dataTables_info" role="status" aria-live="polite">
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="dataTables_paginate paging_simple_numbers">
                        <div class="pagination_parent">

                            {{$items->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
  </div>
</div>


@stop


@section('script')
    <script src="{{ asset('js/sortable.js') }}"></script>
    <script>
        function deletItem(id)
        {
            var result = confirm("Do you want to delete item?");
            if (result === true) {
                document.getElementById('form-delete-'+id).submit();
            }
        }
    </script>
@endsection