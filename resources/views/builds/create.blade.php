@extends('layouts.app')

@section('content')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add a Build</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('builds') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('device_name') ? ' has-error' : '' }}">
                            <label for="device_name" class="col-md-4 control-label">Device Name</label>

                            <div class="col-md-6">
                                <input id="device_name" type="text" class="form-control" name="device_name" placeholder="Device Name">

                                @if ($errors->has('device_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('device_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<div class="form-group{{ $errors->has('build_type') ? ' has-error' : '' }}">
                            <label for="build_type" class="col-md-4 control-label">Build Type</label>

                            <div class="col-md-6">
                                <input id="build_type" type="text" class="form-control" name="build_type" placeholder="Build Type">

                                @if ($errors->has('build_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('build_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('build_name') ? ' has-error' : '' }}">
                            <label for="build_name" class="col-md-4 control-label">Build Name</label>

                            <div class="col-md-6">
                                <input id="build_name" type="text" class="form-control" name="build_name" placeholder="Build Name">

                                @if ($errors->has('build_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('build_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('build_path') ? ' has-error' : '' }}">
                            <label for="build_path" class="col-md-4 control-label">Build Path</label>

                            <div class="col-md-6">
                                <input id="build_path" type="text" class="form-control" name="build_path" placeholder="Build Path">

                                @if ($errors->has('build_path'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('build_path') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sha1') ? ' has-error' : '' }}">
                            <label for="sha1" class="col-md-4 control-label">sha1</label>

                            <div class="col-md-6">
                                <input id="sha1" type="text" class="form-control" name="sha1" placeholder="SHA1">

                                @if ($errors->has('sha1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sha1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-plus"></i> Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection