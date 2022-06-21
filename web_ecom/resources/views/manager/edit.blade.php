    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        List Products
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($products)): ?>
                                <?php foreach ($products as $pro): ?>
                                <tr width="100%">
                                    <td>{{$pro->name}}</td>
                                    <td>
                                        <img src="../public/images/{{ $pro->image }} " height="70" width="70">
                                    </td>

                                    <td class="text-center">
                                        <?php if ($pro->status == "Pending"): ?>
                                        <i class="bg-warning p-1 rounded">{{$pro->status}}</i>
                                        <?php endif; ?>

                                        <?php if ($pro->status == "Approve"): ?>
                                        <i class="bg-success p-1 rounded">{{$pro->status}}</i>
                                        <?php endif; ?>

                                        <?php if ($pro->status == "Reject"): ?>
                                        <i class="bg-danger p-1 rounded">{{$pro->status}}</i>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{URL::to('/edit-product/'.$pro->id)}}" class="btn btn-primary mr-2">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a onclick="return confirm('Are you sure to delete?')"
                                                href="{{URL::to('/delete-product/'.$pro->id)}}" class="btn btn-danger ml-2">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>