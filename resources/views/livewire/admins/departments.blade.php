<div>

<div class="content">
    <div class="container">
        <div class="page-title">
            <h3 class="text-info">Departments
                <button class="btn btn-sm btn-outline-primary float-right" onclick="show_modal()">Add Department</button>
            </h3>
        </div>
        <div class="box box-primary">
            <div class="box-body">
                <table width="100%" class="table table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Photo</th>
                            <th>Created at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>surgery</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td>2/3/2021</td>
                            <td>img</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>surgery</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td>2/3/2021</td>
                            <td>img</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>surgery</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td>2/3/2021</td>
                            <td>img</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>surgery</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td>2/3/2021</td>
                            <td>img</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr><tr>
                            <td>surgery</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td>2/3/2021</td>
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
 <div class="modals" id="add_operation_report">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <div class="text-capitalize">Add Department</div>
            </div>
            <div class="modal-body">
                <form accept-charset="utf-8" wire:submit="add_department()">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" name="Name" wire:model.lazy="name"  placeholder="Enter Name" class="form-control" required />
                        @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" wire:model.lazy="descriptions"  placeholder="Enter Description" class="form-control" required />
                    </div>
                    @error('descriptions') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    <div class="form-group">
                        <label class="form-control-label">Photo</label>
                        <div class="custom-file">
                            <input type="file" name="Photo" wire:model.lazy="photo" class="custom-file-input ">
                            <label class="custom-file-label">Choose Photo</label>
                        </div>
                        @error('photo') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        <small class="text-muted">The photo must have 40x40 size</small>
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

</div>
