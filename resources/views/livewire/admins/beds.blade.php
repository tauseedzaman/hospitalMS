
<div class="content">
    <div class="container">
        <div class="page-title">
            <h3 class="text-info">Bills
                <button class="btn btn-sm btn-outline-primary float-right" onclick="show_modal()">Add Operation</button>
            </h3>
        </div>
        <div class="box box-primary">
            <div class="box-body">
                <table width="100%" class="table table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Bed No</th>
                            <th>Patient</th>
                            <th>Alloted Time</th>
                            <th>Descharge Time</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>433</td>
                            <td>zaman</td>
                            <td>2/3/2021</td>
                            <td>2/5/2021</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>433</td>
                            <td>zaman</td>
                            <td>2/3/2021</td>
                            <td>2/5/2021</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>433</td>
                            <td>zaman</td>
                            <td>2/3/2021</td>
                            <td>2/5/2021</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>433</td>
                            <td>zaman</td>
                            <td>2/3/2021</td>
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
                <div class="text-capitalize">Add Bill</div>
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
                    </div>
                    <div class="form-group">
                        <label for="amt">Amount</label>
                        <input type="number" name="amt" id="amt" placeholder="Enter Amount" class="form-control" required />
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
