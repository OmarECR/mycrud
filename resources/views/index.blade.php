@extends('layouts.master')

@section('content')
    <div class="main-content mt-5">
        <div class="card">
            <div class="card-header">

                <div class="row">
                    <div class="col-md-6">
                        All Posts
                    </div>

                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-success mx-1" href="{{ route('posts.create') }}">Created</a>
                        <a class="btn btn-warning mx-1" href="">Trashed</a>
                    </div>
                </div>

            </div>

            <div class="card-body">
                <table class="table table-striped table-bordered border-dark">
                    <thead style="background: #f2f2f2">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" style="width: 10%">Image</th>
                            <th scope="col" style="width: 20%">Title</th>
                            <th scope="col" style="width: 35%">Description</th>
                            <th scope="col" style="width: 10%">Category</th>
                            <th scope="col" style="width: 10%">Publish Date</th>
                            <th scope="col" style="width: 20%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row">{{$post->id}}</th>
                                <td>
                                    <img src="{{asset($post->image)}}" alt="" width="80">
                                </td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->description}}</td>
                                <td>{{$post->category_id}}</td>
                                <td>{{date('d-m-Y',strtotime($post->created_at))}}</td>
                                <td>
                                    <a class="btn btn-sm btn-success" href="">Show</a>
                                    <a class="btn btn-sm btn-primary" href="{{route('posts.edit', $post->id)}}">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
