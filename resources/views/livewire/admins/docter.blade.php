<div>
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">Docters
                    <button class="btn btn-sm btn-outline-primary float-right" onclick="show_modal()">Add Docter</button>
                </h3>
            </div>
            <div class="box box-primary">
                <div class="box-body">
                    <table width="100%" class="table table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Department</th>
                                <th>Photo</th>
                                <th>Dated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Philip Chaney</td>
                                <td>Philip Chaney</td>
                                <td>philip.chaney@gmail.com</td>
                                <td>Manager</td>
                                <td>Admin</td>
                                <td>Active</td>
                                <td class="text-right">
                                    <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                    <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr><tr>
                                <td>Philip Chaney</td>
                                <td>Philip Chaney</td>
                                <td>philip.chaney@gmail.com</td>
                                <td>Manager</td>
                                <td>Admin</td>
                                <td>Active</td>
                                <td class="text-right">
                                    <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                    <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr><tr>
                                <td>Philip Chaney</td>
                                <td>Philip Chaney</td>
                                <td>philip.chaney@gmail.com</td>
                                <td>Manager</td>
                                <td>Admin</td>
                                <td>Active</td>
                                <td class="text-right">
                                    <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                    <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr><tr>
                                <td>Philip Chaney</td>
                                <td>Philip Chaney</td>
                                <td>philip.chaney@gmail.com</td>
                                <td>Manager</td>
                                <td>Admin</td>
                                <td>Active</td>
                                <td class="text-right">
                                    <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                    <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr><tr>
                                <td>Philip Chaney</td>
                                <td>Philip Chaney</td>
                                <td>philip.chaney@gmail.com</td>
                                <td>Manager</td>
                                <td>Admin</td>
                                <td>Active</td>
                                <td class="text-right">
                                    <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                    <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr><tr>
                                <td>Philip Chaney</td>
                                <td>Philip Chaney</td>
                                <td>philip.chaney@gmail.com</td>
                                <td>Manager</td>
                                <td>Admin</td>
                                <td>Active</td>
                                <td class="text-right">
                                    <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                    <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr><tr>
                                <td>Philip Chaney</td>
                                <td>Philip Chaney</td>
                                <td>philip.chaney@gmail.com</td>
                                <td>Manager</td>
                                <td>Admin</td>
                                <td>Active</td>
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
                    <div class="text-capitalize">add new docter</div>
                </div>
                <div class="modal-body">
                    <form accept-charset="utf-8">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" placeholder="Enter docter name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="Email Address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" placeholder="Password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" placeholder="Address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" placeholder="Phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="Department">Department</label>
                            <select name="Department" class="form-control" required>
                                <option value="" selected>Choose dep...</option>
                                <option value="1">dep-1</option>
                                <option value="2">dep-2</option>
                                <option value="3">dep-3</option>
                            </select>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please select a department.</div>
                        </div>
                        <div class="form-group">
                            <label for="Specialization">Specialization</label>
                            <input type="text" name="Specialization" placeholder="Specialization" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Photo</label>
                            <div class="custom-file">
                                <input type="file" name="Photo" class="custom-file-input">
                                <label class="custom-file-label">Choose Photo</label>
                            </div>
                            <small class="text-muted">The image must have 0x0 size</small>
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
</div>
