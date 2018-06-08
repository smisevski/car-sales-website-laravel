@extends('layouts.app')

@section('content')
<div class="container-fluid" style="margin-top: 50px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>You are logged in!</p>
                    @if(Auth::check())
                        @if(Auth::user()->name)
                            <a class="btn btn-primary" href="{{ url('/logout') }}">Logout</a>
                        @endif
                    @endif

                    <hr>
                    <br>
                    <a class="btn btn-primary" href="create">Add Item</a>
                    <a class="/dashboard/messages" href="create">Messages</a>
                    <br><br>    
                    <h5>Inventory:</h5>
                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Manufacturer</th>
                            <th>Model</th>
                            <th>Edit Item</th>
                            <th>Special Offer</th>
                            <th>Delete</th>
                        </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td><a href="/posts/{{$post->id}}">{{$post->manufacturer}}</a></td>
                                    <td>{{$post->model}}</th>
                                    <td><a class="btn btn-primary" href="/posts/{{$post->id}}/edit">Edit Item</a></td>

                                    <td>
                                        {!! Form::open(['action' => ['SpecialOfferController@add', $post->id], 'method' => 'POST']) !!}
                                            {{Form::submit('Add to Special Offers', ['class' => 'btn btn-primary'])}}   
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['action' => ['PostsController@destroy', $post->id]])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>   
                            @endforeach
                    @else
                        <p>You have no items.</p>
                    @endif   
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection