
<div class="content">
    <div class="container">
        <div class="page-title">
            <h3 class="text-info">Patients
                <button class="btn btn-sm btn-outline-primary float-right" onclick="show_modal()">Add Patient</button>
            </h3>
        </div>
        <div class="box box-primary">
            <div class="box-body">
                <table width="100%" class="table table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>BloodGroup</th>
                            <th>Address</th>
                            <th>Photo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Philip Chaney</td>
                            <td>Phili@gmail.com</td>
                            <td>mail</td>
                            <td>23</td>
                            <td>A+</td>
                            <td>village khar P/O and tehsail dargai</td>
                            <td>phaceholder img</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>Philip Chaney</td>
                            <td>Phili@gmail.com</td>
                            <td>mail</td>
                            <td>23</td>
                            <td>A+</td>
                            <td>village khar P/O and tehsail dargai</td>
                            <td>phaceholder img</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>Philip Chaney</td>
                            <td>Phili@gmail.com</td>
                            <td>mail</td>
                            <td>23</td>
                            <td>A+</td>
                            <td>village khar P/O and tehsail dargai</td>
                            <td>phaceholder img</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>Philip Chaney</td>
                            <td>Phili@gmail.com</td>
                            <td>mail</td>
                            <td>23</td>
                            <td>A+</td>
                            <td>village khar P/O and tehsail dargai</td>
                            <td>phaceholder img</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>Philip Chaney</td>
                            <td>Phili@gmail.com</td>
                            <td>mail</td>
                            <td>23</td>
                            <td>A+</td>
                            <td>village khar P/O and tehsail dargai</td>
                            <td>phaceholder img</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>Philip Chaney</td>
                            <td>Phili@gmail.com</td>
                            <td>mail</td>
                            <td>23</td>
                            <td>A+</td>
                            <td>village khar P/O and tehsail dargai</td>
                            <td>phaceholder img</td>
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
                <div class="text-capitalize">add new operation</div>
            </div>
            <div class="modal-body">
                <form accept-charset="utf-8">

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="" placeholder="Enter Patient Name" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="text" name="Email" id="" placeholder="Enter Patient Email" class="form-control"  />
                        <small class="text-success">Optional</small>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" class="form-control" >
                            <option value="Mail">Mail</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Age">Age</label>
                        <input type="number" name="Age" id="" placeholder="Enter Patient age" class="form-control"  />
                    </div>
                    <div class="form-group">
                        <label for="Blood">Blood Group</label>
                        <select name="Blood" class="form-control" >
                            <option value="null" selected>Null</option>
                            <option value="">A-</option>
                            <option value="">A+</option>
                            <option value="">B+</option>
                            <option value="">AB</option>
                        </select>
                        <small class="text-success">Optional</small>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="" placeholder="Enter Patient Address" class="form-control" required  />
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Photo</label>
                        <div class="custom-file">
                            <input type="file" name="Photo" class="custom-file-input">
                            <label class="custom-file-label">Choose Photo</label>
                        </div>
                        <small class="text-success">Optional</small><br>
                        <small class="text-muted">The Photo must have 0x0 size</small>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-block btn-primary" value="Submit">
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
