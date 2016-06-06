@extends('layouts.app')

@section('content')
<!-- Promotional images -->
<!-- <div class="carousel">
    <img class="visible" src="{{ URL::asset('images/yu_yunicorn.png') }}">
    <img src="{{ URL::asset('images/yu_yutopia.png') }}">
    <img src="{{ URL::asset('images/yu_yunique.png') }}">
    <img src="{{ URL::asset('images/yu_yuphoria.png') }}">
    <img src="{{ URL::asset('images/yu_yureka.png') }}">
</div> -->

<div class="downloads">
    <input class="search" type="text" name="phone" value="" placeholder="Enter Phone Model to Search ROM">

    <div class="row">

    @foreach($builds as $build)

        <div class="col-md-3 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $build->device_name }} ({{ $build->build_type }})</h3>
                </div>
                <div class="panel-body">
                    <p><a>{{ $build->build_name }}</a></p>
                    <p>{{ $build->sha1 }}</p>
                </div>
                <div class="panel-footer">{{ $build->updated_at }}</div>
            </div>        
        </div>
<!-- 
        <div class="col-md-3 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Yureka (Build Type)</h3>
                </div>
                <div class="panel-body">
                    <p><a>Build Name</a></p>
                    <p>sha1</p>
                </div>
                <div class="panel-footer">Time Added</div>
            </div>        
        </div>

        <div class="col-md-3 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Yuphoria (Build Type)</h3>
                </div>
                <div class="panel-body">
                    <p><a>Build Name</a></p>
                    <p>sha1</p>
                </div>
                <div class="panel-footer">Time Added</div>
            </div>        
        </div>

        <div class="col-md-3 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Yunique (Build Type)</h3>
                </div>
                <div class="panel-body">
                    <p><a>Build Name</a></p>
                    <p>sha1</p>
                </div>
                <div class="panel-footer">Time Added</div>
            </div>        
        </div> -->

    @endforeach
    </div>
    
</div>
@endsection