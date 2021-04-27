@extends('admins.layouts.app')

@section('admin_content')

<div class="content">
    <div class="container">
        <div class="page-title">
            <h3 class="text-info">Employees
                <button class="btn btn-sm btn-outline-primary float-right" onclick="show_modal()">Add Employee</button>
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
                            <th>Address</th>
                            <th>Gender</th>
                            <th>Job</th>
                            <th>Salary</th>
                            <th>Dated</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tauseedzaman</td>
                            <td>tause@me.u</td>
                            <td>+920088800</td>
                            <td>sorana</td>
                            <td>Male</td>
                            <td>Docter</td>
                            <td>50,000</td>
                            <td>4/3/2010</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tauseedzaman</td>
                            <td>tause@me.u</td>
                            <td>+920088800</td>
                            <td>sorana</td>
                            <td>Male</td>
                            <td>Docter</td>
                            <td>50,000</td>
                            <td>4/3/2010</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tauseedzaman</td>
                            <td>tause@me.u</td>
                            <td>+920088800</td>
                            <td>sorana</td>
                            <td>Male</td>
                            <td>Docter</td>
                            <td>50,000</td>
                            <td>4/3/2010</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tauseedzaman</td>
                            <td>tause@me.u</td>
                            <td>+920088800</td>
                            <td>sorana</td>
                            <td>Male</td>
                            <td>Docter</td>
                            <td>50,000</td>
                            <td>4/3/2010</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tauseedzaman</td>
                            <td>tause@me.u</td>
                            <td>+920088800</td>
                            <td>sorana</td>
                            <td>Male</td>
                            <td>Docter</td>
                            <td>50,000</td>
                            <td>4/3/2010</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tauseedzaman</td>
                            <td>tause@me.u</td>
                            <td>+920088800</td>
                            <td>sorana</td>
                            <td>Male</td>
                            <td>Docter</td>
                            <td>50,000</td>
                            <td>4/3/2010</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tauseedzaman</td>
                            <td>tause@me.u</td>
                            <td>+920088800</td>
                            <td>sorana</td>
                            <td>Male</td>
                            <td>Docter</td>
                            <td>50,000</td>
                            <td>4/3/2010</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
 </div>
 <div class="modal" id="add_docter_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <div class="text-capitalize">add new employee</div>
            </div>
            <div class="modal-body">
                <form accept-charset="utf-8">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Enter Name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Enter Email " class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Phone">Phone</label>
                        <input type="number" name="Phone" placeholder="Enter Phone Number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" placeholder="Enter Address" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Department">Gender</label>
                        <select name="Department" class="form-control" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Job">Job</label>
                        <input type="text" name="Job" placeholder="Job" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Salary">Salary <small class="text-info">KPR</small></label>
                        <input type="number" name="Salary" placeholder="Salary" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-primary" value="Submit">
                    </div>
                </form>
            </div>
         </div>
     </div>
 </div>
 <script>
     function show_modal(){
         $("#add_docter_modal").modal("show");
     }
     function hide_modal(){
         $("#add_docter_modal").modal("hide");
     }
 </script>
@endsection
