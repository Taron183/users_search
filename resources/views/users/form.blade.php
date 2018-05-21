@extends('layouts.default')
@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">User {{$item->title}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                @if ($item->id)
                    {!! Form::model($item, ['method' => 'PATCH','route' => ['users.update', $item->id],'enctype'=>"multipart/form-data",'id'=>'form_lang_tab']) !!}
                @else
                    {!! Form::model($item, ['method' => 'POST','route' => 'users.store','enctype'=>"multipart/form-data",'id'=>'form_lang_tab' ]) !!}
                @endif
                <div class="form-group">
                    {!! Form::label('first_name', 'First name:') !!}
                    {!! Form::text('first_name', $item->first_name, ['class'=>'form-control', 'placeholder'=>'First name', 'id'=>'first_name']) !!}
                    @if ($errors->has('first_name'))
                        <span class="help-block" style="color: red">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('last_name', 'Last name:') !!}
                    {!! Form::text('last_name', $item->last_name, ['class'=>'form-control', 'placeholder'=>'Last name', 'id'=>'last_name']) !!}
                    @if ($errors->has('last_name'))
                        <span class="help-block" style="color: red">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('keywords', 'Keywords:') !!}
                    {!! Form::text ('keywords', $item->keywords, ['class'=>'form-control', 'placeholder'=>'Keywords', 'id'=>'keywords']) !!}
                    @if ($errors->has('keywords'))
                        <span class="help-block" style="color: red">
                            <strong>{{ $errors->first('keywords') }}</strong>
                        </span>
                    @endif
                </div>

                    @if($item->id)
                         @if($item->file)
                            <div class="img-div">
                                <img src="{{asset('images/file.jpg')}}" href="" height="125px">
                                <a  class="download-file" href="{{route('download.file',['id'=>$item->id])}}"></a>
                            </div>
                          @endif
                    @endif
                <div class="form-group">
                    {!! Form::label('file', 'Resume attach:') !!}
                    <input type="file" id="file" name="file" accept=".pdf, .txt, .doc"/>
                    @if ($errors->has('file'))
                        <span class="help-block" style="color: red">
                             <strong>{{ $errors->first('file') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-flat">
                        {!! $item->id ? '<i class="fa fa-edit"></i> Update' : '<i class="fa fa-plus"></i> Create' !!}
                    </button>
                    <a href="{{route('users.index')}}" class="btn btn-default btn-flat pull-right">
                        <i class="fa fa-reply"></i> Back
                    </a>
                </div>
                {!! Form::close() !!}
            </div>
            <!-- /.box-body -->
        </div>
    </div>
@endsection

@section('style')
    <style>
        .download-file{
            position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
            }

            .img-div{
                position: relative;
                width: 100px;
                overflow: hidden;
            }
    </style>



@endsection
