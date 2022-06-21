@extends('index')
@section('content')

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>Add Product</h4>
            </div>
            <div class="card-body">
                <form action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6 pb-3">
                                <label class="mb-0 pb-2">Product Name</label>
                                <input type="text" name="name" placeholder="Product Name" class="form-control">
                            </div>
                            <div class="col-md-6 pb-3">
                                <label class="mb-0 pb-2">Product Image</label>
                                <input type="file" name="image" placeholder="Select Image" class="form-control">
                            </div>
                            <div class="col-md-6 pb-3">
                                <label class="mb-0 pb-2">Price</label>
                                <input type="text" name="price" placeholder="Product Price"
                                    class="form-control">
                            </div>

                            <div class="col-md-6 pb-3">
                                <label class="mb-0 pb-2">Quantity</label>
                                <input type="text" name="quantity" placeholder="Product Quantity" class="form-control">
                            </div>
                            <div class="col-md-6 pb-3">
                                <label class="mb-0 pb-2">Status</label>
                                <select name="status" class="form-control">
                                    <option>Pending</option>
                                    <option>Approve</option>
                                    <option>Reject</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="mb-0 pb-2">Description</label>
                                <textarea row="5" type="text" name="description" placeholder="Description"
                                    class="form-control"></textarea>
                            </div>
                            <div class="col-md-12">
                                <br>
                                <button type="submit" class="btn btn-primary" name="add_product">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection