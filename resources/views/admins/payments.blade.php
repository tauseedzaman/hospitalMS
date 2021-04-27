@extends('admins.layouts.app')

@section('admin_content')

<div class="content">
    <div class="container">
        <div class="page-title">
            <h3 class="text-info">Payments
                <button class="btn btn-sm btn-outline-primary float-right" onclick="show_modal()">Add Rooms</button>
            </h3>
        </div>
        <div class="box box-primary">
            <div class="box-body">
                <table width="100%" class="table table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Bed No</th>
                            <th>Department</th>
                            <th>Dated</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>433</td>
                            <td>zaman</td>
                            <td>2/5/2021</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr> <tr>
                            <td>433</td>
                            <td>zaman</td>
                            <td>2/5/2021</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr> <tr>
                            <td>433</td>
                            <td>zaman</td>
                            <td>2/5/2021</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr> <tr>
                            <td>433</td>
                            <td>zaman</td>
                            <td>2/5/2021</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr> <tr>
                            <td>433</td>
                            <td>zaman</td>
                            <td>2/5/2021</td>
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
                <div class="text-capitalize">Add Room</div>
            </div>
            <div class="modal-body">
                <form accept-charset="utf-8">
                    <div class="form-group">
                        <label for="Department">Department</label>
                        <select name="Department" class="form-control" required>
                            <option value="" selected>Choose Department</option>
                            <option value="1">Department-1</option>
                            <option value="2">Department-2</option>
                            <option value="3">Department-3</option>
                        </select>
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
