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
        </div>
        <div class="col-md-6 box-border">
            <h3>Wiki Intro Column Right</h3>
        </div>
        <div>
            <a href="{{route('wiki.create')}}" class="btn btn-primary">Create a Link</a>
        </div>
        <div>
            @if($links != null)
            <table class="col-md-12">
                <thead>
                    <th class="col-md-1 no-pad">ID</th>
                    <th class="col-md-3 no-pad">URL</th>
                    <th class="col-md-3 no-pad">Alt</th>
                    <th class="col-md-3 no-pad">Link Text</th>
                    <th class="col-md-3 no-pad">Added By</th>
                </thead>
                <tbody>
                    @foreach($links as $link)
                    <tr>
                        <td>{{$link->id }}</td>
                        <td><a href="{{$link->url}}" target="_blank">{{$link->url}}</a></td>
                        <td>{{$link->alt_text}}</td>
                        <td>{{$link->description}}</td>
                        <td>Mister Tester</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
@endsection
