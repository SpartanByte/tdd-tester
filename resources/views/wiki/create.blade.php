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
                </div>
            </div>
        </div>
    </div>
    <div class="thinbox">
        <div class="col-md-8">
            <!--- start here -->
            <h3>Create a Link</h3>
            <form method="POST" action="{{ route('wiki.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="urlInput">Enter URL</label>
                        <input type="text" class="form-control" id="url" name="url" placeholder="Enter a URL" />
                </div>
                <div class="form-group">
                    <label for="altText">Enter Alt Text</label>
                    <input type="text" class="form-control" id="alttext" name="alttext">
                </div>
                <div class="form-group">
                    <label for="linkDescription">Link Text</label>
                    <input type="text" class="form-control" id="linktext" name="linktext">
                </div>
                <button type="submit" class="btn btn-primary">Submit Link</button>
            </form>
        </div>
    </div>
@endsection
