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
                    <div class="card-header">Home</div>
                    <div class="card-body">
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
