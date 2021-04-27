@extends('admins.layouts.app')

@section('admin_content')

<div class="content">
    <div class="container">
        <div class="page-title">
            <h3 class="text-info">Nurses
                <button class="btn btn-sm btn-outline-primary float-right" onclick="show_modal()">Add Nurse</button>
            </h3>
        </div>
        <div class="box box-primary">
            <div class="box-body">
                <table width="100%" class="table table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Qualification</th>
                            <th>Photo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tuaseed zaman</td>
                            <td>tauseed@gmail.com</td>
                            <td>+92123456789</td>
                            <td>Male</td>
                            <td>sorana</td>
                            <td>BSCS</td>
                            <td>img</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>Tuaseed zaman</td>
                            <td>tauseed@gmail.com</td>
                            <td>+92123456789</td>
                            <td>Male</td>
                            <td>sorana</td>
                            <td>BSCS</td>
                            <td>img</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>Tuaseed zaman</td>
                            <td>tauseed@gmail.com</td>
                            <td>+92123456789</td>
                            <td>Male</td>
                            <td>sorana</td>
                            <td>BSCS</td>
                            <td>img</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>Tuaseed zaman</td>
                            <td>tauseed@gmail.com</td>
                            <td>+92123456789</td>
                            <td>Male</td>
                            <td>sorana</td>
                            <td>BSCS</td>
                            <td>img</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>Tuaseed zaman</td>
                            <td>tauseed@gmail.com</td>
                            <td>+92123456789</td>
                            <td>Male</td>
                            <td>sorana</td>
                            <td>BSCS</td>
                            <td>img</td>
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
                <div class="text-capitalize">Add Nurse</div>
            </div>
            <div class="modal-body">
                <form accept-charset="utf-8">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" name="Name" placeholder="Enter Name" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" name="Email" placeholder="Enter Email" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label for="Phone">Phone</label>
                        <input type="number" name="Phone" placeholder="Enter Phone Number" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label for="Department">Gender</label>
                        <select name="Department" class="form-control" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Address">Address</label>
                        <input type="text" name="Address"  placeholder="Enter Address" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label for="Qualification">Qualification</label>
                        <input type="text" name="Qualification"  placeholder="Enter Qualification" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Photo</label>
                        <div class="custom-file">
                            <input type="file" name="Photo" class="custom-file-input">
                            <label class="custom-file-label">Choose Photo</label>
                        </div>
                        <small class="text-muted">The photo must have 0x0 size</small>
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
