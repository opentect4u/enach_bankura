<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Welcome <?= $_SESSION['user']['user_name'] ?></h3>
                <h6 class="font-weight-normal mb-0">All eMandate Registration Status</h6>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 row grid-margin transparent">
        <div class="col-md-3 mb-4 stretch-card transparent">
            <div class="card card-outline-success">
                <div class="card-body">
                    <p class="mb-4">Success</p>
                    <p class="fs-30 mb-2"><?= $tot_suc ?></p>
                    <!-- <p>10.00% (30 days)</p> -->
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4 stretch-card transparent">
            <div class="card card-outline-warning">
                <div class="card-body">
                    <p class="mb-4">Pending</p>
                    <p class="fs-30 mb-2"><?= $tot_pen ?></p>
                    <!-- <p>22.00% (30 days)</p> -->
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4 stretch-card transparent">
            <div class="card card-outline-danger">
                <div class="card-body">
                    <p class="mb-4">Failure</p>
                    <p class="fs-30 mb-2"><?= $tot_fail ?></p>
                    <!-- <p>2.00% (30 days)</p> -->
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4 stretch-card transparent">
            <div class="card card-outline-danger">
                <div class="card-body">
                    <p class="mb-4">Others</p>
                    <p class="fs-30 mb-2"><?= $tot_oth ?></p>
                    <!-- <p>2.00% (30 days)</p> -->
                </div>
            </div>
        </div>
    </div>
</div>