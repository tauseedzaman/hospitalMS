@extends('admins.layouts.app')

@section('admin_content')

<div class="content">
    <div class="container">
        <div class="page-title">
            <h3 class="text-info">Medicines Store
                <button class="btn btn-sm btn-outline-primary float-right" onclick="show_modal()">Add Medicine</button>
            </h3>
        </div>
        <div class="box box-primary">
            <div class="box-body">
                <table width="100%" class="table table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Code</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>250</td>
                            <td>90</td>
                            <td>212</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>250</td>
                            <td>90</td>
                            <td>212</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>250</td>
                            <td>90</td>
                            <td>212</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>250</td>
                            <td>90</td>
                            <td>212</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
 </div>
 <div class="modal" id="add_operation_report">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <div class="text-capitalize">Add Medicine</div>
            </div>
            <div class="modal-body">
                <form accept-charset="utf-8">
                    <div class="form-group">
                        <label for="Price">Price <small class="text-info text-sm" >KPR</small></label>
                        <input type="number" name="Price" id="Price" placeholder="Enter medicine Price" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label for="Quantity">Quantity</label>
                        <input type="number" name="Quantity" id="Quantity" placeholder="Enter Medicine Quantity" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label for="Code">Code</label>
                        <input type="number" name="Code" id="Code" placeholder="Enter Medicine Code" class="form-control" required />
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-block btn-primary" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
 </div>

 <script>
     function show_modal(){
         $("#add_operation_report").modal("show");
     }
     function hide_modal(){
         $("#add_operation_report").modal("hide");
     }
 </script>
@endsection
