<!-- view product -->

@extends('layouts.newadmin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Product</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID Product</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Overview</th>
                                            <th>banner</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $product)
                                            <tr>
                                                <td>Product {{ $product->id }}</td>
                                                <td>{{ $product->title }}</td>
                                                <td>{{ $product->image }}</td>
                                                <td>{{ $product->overview }}</td>
                                                <td>{{ $product->banner }}</td>
                                                <td>
                                                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="{{ route('product.delete', $product->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection