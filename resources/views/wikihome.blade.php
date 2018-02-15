@extends('layouts.wiki')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        Internet Wiki Home
                    </div>
                    <div class="col-md-10">
                        <div class="col-sm-8">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testbox">
        <h3>Welcome to the Wiki Homepage</h3>
        <div class="col-md-6 box-border">
            <h3>Wiki Intro Column Left</h3>
            <a href="{{route('wiki.create')}}" class="btn btn-primary">Create a Link</a>
        </div>
        <div class="col-md-6 box-border">
            <h3>Wiki Intro Column Right</h3>
        </div>
    </div>
@endsection
