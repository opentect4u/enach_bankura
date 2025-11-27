<?php if ($this->session->flashdata('msg')) { ?>
    <script>
        triggerSweetAlert("<?= $this->session->flashdata('title') ?>", "<?= $this->session->flashdata('msg') ?>", "<?= $this->session->flashdata('status') ?>")
    </script>
<?php } ?>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?= $header ?></h4>
                <div class="row mx-4">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="txn_status" id="st_suc" value="S" checked>
                            <label class="form-check-label" for="st_suc">
                                Success
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="txn_status" id="st_pend" value="P">
                            <label class="form-check-label" for="st_pend">
                                Pending
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="txn_status" id="st_err" value="O">
                            <label class="form-check-label" for="st_err">
                                Failure / Others
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="txn_data_table" class="display expandable-table date-table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>TNX Date</th>
                                        <th>UMRN</th>
                                        <th>Loan ID</th>
                                        <th>Customer Name</th>
                                        <!-- <th>Client Name</th> -->
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($result as $key => $val) { ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= date('d/m/Y', strtotime($val->tpsl_txn_date_time)) ?></td>
                                            <td><?= $val->umrn_number ?></td>
                                            <td><?= $val->loan_id ?></td>
                                            <td><?= $val->cust_name ?></td>
                                            <!-- <td><?php //$val->CUST_NAME ?></td> -->
                                            <td><?= strtoupper($val->txn_msg) ?></td>
                                        </tr>
                                    <?php $i++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function formatDate(inputDate) {
        const date = new Date(inputDate);
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        return `${day}/${month}/${year}`;
    }
    $('input[name="txn_status"]').on('change', function(){
        $.ajax({
		    type: "GET",
		    url: "<?= site_url('/man_report_by_flag/'); ?>" + $(this).val(),
		    // data: {flag: $(this).val()},
		    dataType: 'html',
            beforeSend: function () {
                // Show image container
                $("#loader").show();
                $('#display-content').hide();
            },
		    success: function (result) {
                var res = JSON.parse(result)
                // console.log(res);
                $('#txn_data_table tbody').empty()
                if(res.length > 0){
                    $.each(res, function(i, dt){
                        $('#txn_data_table tbody').append(`
                            <tr>
                                <td>${i+1}</td>
                                <td>${formatDate(dt.tpsl_txn_date_time)}</td>
                                <td>${dt.umrn_number}</td>
                                <td>${dt.loan_id}</td>
                                <td>${dt.cust_name}</td>
                                <td>${dt.txn_msg.toUpperCase()}</td>
                            </tr>
                        `)
                    })
                }else{
                    $('#txn_data_table tbody').append(`
                        <tr>
                            <td colspan="5" class="text-center text-danger">No data found</td>
                        </tr>
                    `)
                }
		    },
            complete: function (data) {
                // Hide image container
                $("#loader").hide();
                $('#display-content').show();
            }
		});
    })
    function getTransactionDtls(loan_id, tnx_ref, tnx_date) {
        
    }
</script>