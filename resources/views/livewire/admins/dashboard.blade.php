<div class="container mt-4">
    <div class="row">
        <div class="col-md-3">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-users"></i> Total Employees</h5>
                    <p class="card-text">{{ $employees }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="far fa-calendar-check"></i> Total Appointments</h5>
                    <p class="card-text">{{ $appointments }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-baby"></i> Total Birth Reports</h5>
                    <p class="card-text">{{ $birthreports }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-user-md"></i> Total Operation Reports</h5>
                    <p class="card-text">{{ $operationreports }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card bg-danger text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-procedures"></i> Total Patients</h5>
                    <p class="card-text">{{ $patients }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-secondary text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-user-tie"></i> Total HODs</h5>
                    <p class="card-text">{{ $hods }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-dark text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-cube"></i> Total Blocks</h5>
                    <p class="card-text">{{ $blocks }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-building"></i> Total Departments</h5>
                    <p class="card-text">{{ $departments }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-door-open"></i> Total Rooms</h5>
                    <p class="card-text">{{ $rooms }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-bed"></i> Total Beds</h5>
                    <p class="card-text">{{ $beds }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-user-plus"></i> Total Subscribers</h5>
                    <p class="card-text">{{ $subscribers }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-calendar-plus"></i> Total Requested Appointments</h5>
                    <p class="card-text">{{ $requestedAppointment }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
