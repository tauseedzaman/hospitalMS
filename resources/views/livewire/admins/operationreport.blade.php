<div class="content">
    <div class="container">
        <div class="page-title">
            <h3 class="text-info">Operations Reports
                <button class="btn btn-sm btn-outline-primary float-right" onclick="show_modal()">Add Operation</button>
            </h3>
        </div>
        <div class="box box-primary">
            <div class="box-body">
                <table width="100%" class="table table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Patient</th>
                            <th>Details</th>
                            <th>Docter</th>
                            <th>Dated</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Philip Chaney</td>
                            <td>Philip Chaney</td>
                            <td>philip.chaney@gmail.com</td>
                            <td>Active</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>Philip Chaney</td>
                            <td>Philip Chaney</td>
                            <td>philip.chaney@gmail.com</td>
                            <td>Active</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>Philip Chaney</td>
                            <td>Philip Chaney</td>
                            <td>philip.chaney@gmail.com</td>
                            <td>Active</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>Philip Chaney</td>
                            <td>Philip Chaney</td>
                            <td>philip.chaney@gmail.com</td>
                            <td>Active</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>Philip Chaney</td>
                            <td>Philip Chaney</td>
                            <td>philip.chaney@gmail.com</td>
                            <td>Active</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>Philip Chaney</td>
                            <td>Philip Chaney</td>
                            <td>philip.chaney@gmail.com</td>
                            <td>Active</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>Philip Chaney</td>
                            <td>Philip Chaney</td>
                            <td>philip.chaney@gmail.com</td>
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
 <div class="modal" id="add_operation_report">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <div class="text-capitalize">add new operation</div>
            </div>
            <div class="modal-body">
                <form accept-charset="utf-8">
                    <div class="form-group">
                        <label for="Patient">Patient</label>
                        <select name="Patient" class="form-control" required>
                            <option value="" selected>Choose Patient</option>
                            <option value="1">Patient-1</option>
                            <option value="2">Patient-2</option>
                            <option value="3">Patient-3</option>
                        </select>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please select a Patient.</div>
                    </div>
                    <div class="form-group">
                        <label for="Details">Details</label>
                        <textarea name="Details" id="Details" placeholder="Enter Operation Details" class="form-control" required cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Docter">Docter</label>
                        <select name="Docter" class="form-control" required>
                            <option value="" selected>Choose Docter...</option>
                            <option value="1">Docter-1</option>
                            <option value="2">Docter-2</option>
                            <option value="3">Docter-3</option>
                        </select>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please select a Docter.</div>
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
