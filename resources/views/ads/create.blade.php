@extends('layouts.app')
@section('content')
<div>

    <example-component/>

</div>

    <div class="container">

        <div class="row ">
            <div class="col-md-3">
                <div class="card ">

                    <div class="card-body ">
                        <img class="mx-auto d-block img-thumbnail" src="/img/man.jpg" width="130">
                        <p class="text-center"><b>Mohammed Terfa</b></p>
                    </div>
                    <hr style="border:2px solid blue;">
                    <div class="vertical-menu">
                        <a href="#">Dashboard</a>
                        <a href="#">Profile</a>
                        <a href="#">Create ads</a>
                        <a href="#">Published ads</a>
                        <a href="#">Pending ads</a>
                        <a href="#" class="">Message</a>
                    </div>

                </div>
            </div>
            <div class="col-md-9">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        @foreach ($errors->all() as $errorMessage)
                            <li>{{ $errorMessage }}</li>
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('ads.store') }}" method="post" enctype="multipart/form-data">@csrf
                    <div class="card">
                        <div class="card-header text-white" style="background-color: rgb(7, 1, 137)">
                            Post your ad.
                        </div>
                        <div class="card-body">
                            <label for="file" class="mt-2"><b>Upload 3 Images</b></label>
                            <div class="row m-2">

                                <div class="col-md-4">
                                    <input type="file" class="" name="feature_image" accept="image/*">
                                </div>
                                <div class="col-md-4">
                                    <input type="file" class="" name="first_image" accept="image/*">
                                </div>
                                <div class="col-md-4">
                                    <input type="file" class="" name="second_image" accept="image/*">
                                </div>

                            </div>
                            <label for="file" class="mt-2"><b>Choose category</b></label>
                            <div class="row m-2">

                                <div class="col-md-4">
                                    <select class="form-control" name="category_id">
                                        <option value=""> choose category</option>
                                        @foreach (App\Models\Category::all() as $category )
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="subcategory_id">
                                        <option value="">choose subcategory</option>
                                        @foreach (App\Models\Subcategory::all() as $subcategory )
                                            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="childcategory_id">
                                        <option value="">choose childcategory</option>
                                        @foreach (App\Models\Childcategory::all() as $childbcategory )
                                            <option value="{{ $childbcategory->id }}">{{ $childbcategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>


                            </div>

                            <div class="form-group">
                                <label for="name"><b>Name</b></label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description"><b>Description</b></label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="description"><b>Price</b></label>
                                <input type="text" name="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description"><b>Price staus</b></label>
                                <select class="form-control" name="price_status">
                                    <option value="negoitable">Negotiable</option>
                                    <option value="fixed">Fixed</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description"><b>Product Condition</b></label>
                                <select class="form-control" name="product_condition">
                                    <option value="">Select </option>
                                    <option value="likenew">Looks like New</option>
                                    <option value="heavilyused">Heavily Used</option>
                                    <option value="new">New</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="location"><b>Listing Location</b></label>
                                <input type="text" class="form-control" name="listing_location">
                            </div>
                            <label for="file" class="mt-2"><b>Choose address</b></label>
                            <div class="row m-2">

                                <div class="col-md-4">
                                    <select class="form-control" name="country_id">
                                        <option value=""> Select country</option>
                                        @foreach (App\Models\Country::all() as $country )
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="state_id">
                                        <option value="">Select state</option>
                                        @foreach (App\Models\State::all() as $state )
                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="city_id">
                                        <option value="">Select city </option>
                                        @foreach (App\Models\City::all() as $city )
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="location"><b>Seller contact number</b></label>
                                <input type="number" class="form-control" name="phone_number">
                            </div>
                            <div class="form-group">
                                <label for="location"><b>Demo link of product(ie:youtube)</b></label>
                                <input type="text" class="form-control" name="link">
                            </div>
                            <div class="form-group mt-2">
                                <button class="btn btn-danger float-end" type="submit">Publish</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        .vertical-menu a {
            background-color: #fff;
            color: #000;
            display: block;
            padding: 12px;
            text-decoration: none;
        }

        .vertical-menu a:hover {
            background-color: rgb(7, 1, 137);
            color: #fff;
        }

    </style>

@endsection
