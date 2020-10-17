@extends('layouts.admin-master')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <strong>Ürün Ekleme </strong> Formu
                        </div>
                        <div class="card-body card-block">
                            <form action="{{route('product.create')}}" method="post" enctype="multipart/form-data" class="dark-matter">
                                <div class="form-group">
                                    <label for="exampleName">Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleName">Price</label>
                                    <input type="text" name="price" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleName">Category</label>
                                    <input type="text" name="category" class="form-control">
                                </div>
                                <div class="form-group">
                                    @csrf
                                    <input type="file" name="photo" class="form-control">
                                    <input type="submit" class="button" value="Yükle"/>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
