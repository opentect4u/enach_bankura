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
                <form action="<?= site_url() ?>/emv_view" method="POST">
                    <div class="row mt-3">
                        <?php /*
                        <div class="col-md-4">
                            <label for="frm_dt" class="form-label">From Date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control form-control-sm" id="frm_dt" name="frm_dt" value="<?= $selected['frm_dt'] ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="to_dt" class="form-label">To Date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control form-control-sm" id="to_dt" name="to_dt" value="<?= $selected['to_dt'] ?>">
                        </div>
                        */ ?>
                        <div class="col-md-8">
                            <label for="search_val" class="form-label">Client ID / Loan ID / UMRN <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm" id="search_val" name="search_val" placeholder="Enter client id or loan id or UMRN number" value="<?= $selected['search_val'] ?>">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary mt-4" id="search" name="search">Search</button>
                        </div>
                    </div>
                </form>
                <?php if(isset($_REQUEST['search'])){ ?> 
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="display expandable-table date-table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>TNX Date</th>
                                            <th>Loan ID</th>
                                            <th>Client ID</th>
                                            <!-- <th>Client Name</th> -->
                                            <th>Status</th>
                                            <th>Mandate Verify</th>
                                            <th>Transaction</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($result as $key => $val) { ?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><?= date('d/m/Y', strtotime($val->tpsl_txn_date_time)) ?></td>
                                                <td><?= $val->loan_id ?></td>
                                                <td><?= $val->cust_id ?></td>
                                                <!-- <td><?php //$val->CUST_NAME ?></td> -->
                                                <td><?= strtoupper($val->txn_msg) ?></td>
                                                <?php /* <td><a href="<?= site_url() ?>/search_tnx"><i class="mdi mdi-eye"></i></a></td> */ ?>
                                                <td><button type="button" onclick="getTransactionDtls('<?= $val->loan_id ?>', '<?= $val->clnt_txn_ref ?>', '<?= $val->tpsl_txn_date_time ?>')"><i class="mdi mdi-eye"></i></button></td>
                                                <td><i class="mdi mdi-hand-pointing-right"></i></td>
                                            </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tnx_view_modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">eMandate Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-5">
                <label>Status:</label>
            </div>
            <div class="col-md-7">
                <span id="status"></span>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-5">
                <label>Bank Reference No:</label>
            </div>
            <div class="col-md-7">
                <span id="bank_ref_id"></span>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<script>
    function getTransactionDtls(loan_id, tnx_ref, tnx_date) {
        $.ajax({
		    type: "POST",
		    url: "<?= site_url('/get_tnx_dtls'); ?>",
		    data: {clnt_tnx_ref: tnx_ref, tpsl_txn_date_time: tnx_date, loan_id: loan_id},
		    dataType: 'html',
            beforeSend: function () {
                // Show image container
                $("#loader").show();
                $('#display-content').hide();
            },
		    success: function (result) {
                var res = JSON.parse(result)
                console.log(res);
                var status = res.paymentMethod.paymentTransaction.statusMessage,
                ref_id = res.paymentMethod.paymentTransaction.bankReferenceIdentifier;
                $('#tnx_view_modal').modal('show')
                $('#status').text(status)
                $('#bank_ref_id').text(ref_id)
				// $('#token').val(result)
				// $('#btnSubmit').show();
				// $('#processBtn').hide()
		    },
            complete: function (data) {
                // Hide image container
                $("#loader").hide();
                $('#display-content').show();
            }
		});
    }
</script>