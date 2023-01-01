@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            @include('backend.inc.message')
            <h4>Manage Childcategory</h4>
            <div class="row justify-content-center">


                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">


                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Subcategory</th>
                                            <th>Name</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($childcategories as $childcategory)
                                            <tr>
                                                <td class="category_{{ $childcategory->subcategory->id }}">{{ $childcategory->subcategory->name }}</td>
                                                <td>{{ $childcategory->name }}</td>

                                                <td>
                                                    <a href="{{ route('childcategory.edit', [$childcategory->id]) }}">
                                                        <button class="btn btn-sm btn-info"><i
                                                                class="mdi mdi-table-edit"></i></button>
                                                    </a>
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                                        data-target="#exampleModal{{ $childcategory->id }}">
                                                        <i class="mdi mdi-delete"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal{{ $childcategory->id }}"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <form action="{{ route('childcategory.destroy', $childcategory->id) }}"
                                                                method="post">@csrf
                                                                @method('DELETE')
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Delete confirmation</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>

                                                                    <div class="modal-body">
                                                                        Once deleted can never be recovered.
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-danger">Delete</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>


                                                </td>
                                            </tr>
                                        @empty
                                            <td>No childcategory to display</td>
                                        @endforelse


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <style>
                td.category_3{
                    background-color: aliceblue;
                }

                td.category_4{
                    background-color: bisque;
                }

                td.category_5{
                    background-color: darkgray;
                }

                td.category_6{
                    background-color: rgb(131, 120, 201);
                }

                td.category_7{
                    background-color: rgb(231, 147, 250);
                }

                td.category_8{
                    background-color: rgb(251, 167, 223);
                }

                td.category_9{
                    background-color: rgb(211, 232, 104);
                }

                td.category_10{
                    background-color: rgb(232, 247, 133);
                }

                td.category_12{
                    background-color: rgb(162, 247, 133);
                }

                td.category_13{
                    background-color: rgb(173, 183, 255);
                }

                td.category_17{
                    background-color: rgb(221, 173, 255);
                }

                td.category_19{
                    background-color: rgb(255, 173, 245);
                }

                td.category_20{
                    background-color: rgb(255, 173, 178);
                }
            </style>


        @endsection
