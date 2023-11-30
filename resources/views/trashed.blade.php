@extends('layouts.master')

@section('content')

    <div class="main-content mt-5">
        <div class="card">
            <div class="card-header">

                <div class="row">
                    <div class="col-md-6">
                        Trashed Posts
                    </div>

                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-success mx-1" href="">Back</a>
                    </div>
                </div>
                
            </div>

            <div class="card-body">
                <table class="table table-striped table-bordered border-dark">
                    <thead style="background: #f2f2f2">
                      <tr>
                        <th scope="col" >#</th>
                        <th scope="col" style="width: 10%">Image</th>
                        <th scope="col" style="width: 20%">Title</th>
                        <th scope="col" style="width: 35%">Description</th>
                        <th scope="col" style="width: 10%">Category</th>
                        <th scope="col" style="width: 10%">Publish Date</th>
                        <th scope="col" style="width: 20%">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>
                            <img src="https://picsum.photos/200" alt="" width="80">
                        </td>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ad perferendis dicta suscipit at doloremque magnam cumque odio rem porro cupiditate sequi ut harum.</td>
                        <td>News</td>
                        <td>23-11-2023</td>
                        <td>
                            <a class="btn btn-sm btn-success" href="">Show</a>
                            <a class="btn btn-sm btn-primary" href="">Edit</a>
                            <a class="btn btn-sm btn-danger" href="">Delete</a>
                        </td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection