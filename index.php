<?php include('includes/header.php'); ?>

Hello Working World

<!-- Modal -->
<div class="modal fade" id="insertData" tabindex="-1" role="dialog" aria-labelledby="insertDataLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="insertDataLabel">Book Appointment
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Modal Body
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Book</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <div class="header-text">Yfkes Modal card header</div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#insertData">
                        Insert Data
                    </button>
                </div>
                <div class="card-body"></div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
</div>





<?php include('includes/footer.php'); ?>