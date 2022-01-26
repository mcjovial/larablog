@extends('layout')

@section('title', 'Homepage')
    
@section('css')

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
            <h1>Welcome to My Blog!</h1>
            <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>First Post</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi possimus magnam tempore autem illo repellat similique.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>
        </div>

        <div class="col-md-8">
            <div class="post">
                <h3>Second Post</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi possimus magnam tempore autem illo repellat similique.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>
        </div>

        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div>
@endsection

@section('javascript')
    
@endsection