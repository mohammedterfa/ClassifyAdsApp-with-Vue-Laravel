@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">

                    <div class="card-body">
                        <img src="/img/man.jpg" class="mx-auto d-block img-thumbnail" width="130">
                        <p class="text-center"><b>Mohammed Terfa</b></p>
                    </div>
                    <hr style="border:2px solid blue;">

                    <div class="vertical-menu">
                        <a href="">Dashboard</a>
                        <a href="">Profile</a>
                        <a href="">Create ads</a>
                        <a href="">Published ads</a>
                        <a href="">Pending ads</a>
                        <a href="">Message</a>
                    </div>

                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header text-white" style="background-color:rgb(0, 4, 106);">Post your ads</div>
                    <div class="card-body">
                        <label for="file" class="mt-2"><b>Upload 3 images</b></label>
                        <div class="form-inline form-group mt-1">
                            <div class="col-md-4">
                                <input type="file" class="" name="">
                            </div>
                            <div class="col-md-4">
                                <input type="file" class="" name="">
                            </div>
                            <div class="col-md-4">
                                <input type="file" class="" name="">
                            </div>
                        </div>

                        <label for="file" class="mt-2"><b>Choose category</b></label>
                        <div class="form-inline form-group mt-1">
                            <div class="col-md-4">
                                <select name="" class="form-control">
                                    <option value="">Choose category</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select name="" class="form-control">
                                    <option value="">Choose subcategory</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select name="" class="form-control">
                                    <option value="">Choose childcategory</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name"><b>Name</b></label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="descrition"><b>Description</b></label>
                            <textarea name="" class="form-control" id="" cols="5" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="descrition"><b>Price</b></label>
                            <input type="text" class="form-control">
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>
        .vertical-menu a{
            background-color: #fff;
            color: #000;
            display: block;
            padding: 12px;
            text-decoration: none;
        }

        .vertical-menu a:hover{
            background-color: rgb(0, 4, 106);
            color: #fff;
        }
    </style>
@endsection
