<?php if ($this->session->flashdata('msg')) { ?>
    <script>
        triggerSweetAlert("<?= $this->session->flashdata('title') ?>", "<?= $this->session->flashdata('msg') ?>", "<?= $this->session->flashdata('status') ?>")
    </script>
<?php } ?>
<style>
  /* Force table wrapper to full width */
  .dataTables_wrapper {
    width: 100% !important;
    box-sizing: border-box;
  }

  /* Force the actual table to 100% */
  #txn_data_table {
    width: 100% !important;
  }

  /* Make buttons flow above table and not shrink wrapper */
  .dataTables_wrapper .dt-buttons {
    display: block;
    margin-bottom: 8px;
  }
</style>
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
                            <table id="txn_data_table" class="display expandable-table date-table" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>TNX Date</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Amount</th>
                                        <th>UMRN</th>
                                        <th>Loan ID</th>
                                        <th>Customer Name</th>
                                        <!-- <th>Client Name</th> -->
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php /* $i = 1;
                                    foreach ($result as $key => $val) { ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= date('d/m/Y', strtotime($val->tpsl_txn_date_time)) ?></td>
                                            <td><?= date('d/m/Y', strtotime($val->start_dt)) ?></td>
                                            <td><?= date('d/m/Y', strtotime($val->end_dt)) ?></td>
                                            <td><?= $val->txn_amt ?></td>
                                            <td><?= $val->umrn_number ?></td>
                                            <td><?= $val->loan_id ?></td>
                                            <td><?= $val->cust_name ?></td>
                                            <!-- <td><?php //$val->CUST_NAME ?></td> -->
                                            <td><?= strtoupper($val->txn_msg) ?></td>
                                        </tr>
                                    <?php $i++; } */ ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery FIRST -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<!-- Buttons extension (must come after DataTables) -->
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

<!-- Optional for excel/pdf buttons -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

<script>
  var table;
    table = $('#txn_data_table').DataTable({
      dom: 'Bfrtip',
      buttons: ['excel', 'print'],
      autoWidth: true,
      responsive: true,
      scrollX: true,
      columns: [
        { data: null, orderable: false, searchable: false,
          render: function (data, type, row, meta) { return meta.row + 1; }
        },
        { data: 'tpsl_txn_date_time', render: function (d){ return (!d || d==='0000-00-00 00:00:00')? '': d; } },
        { data: 'start_dt', render: function (d){ return (!d || d==='0000-00-00 00:00:00')? '': d; } },
        { data: 'end_dt', render: function (d){ return (!d || d==='0000-00-00 00:00:00')? '': d; } },
        { data: 'txn_amt' },
        { data: 'umrn_number' },
        { data: 'loan_id' },
        { data: 'cust_name' },
        { data: null, render: function (data, type, row) {
            var code = row.txn_status || '';
            var msg = row.txn_msg || '';
            var err = row.txn_err_msg || '';
            var display = `<span>${msg}</span>`
            // var display = code ? (code + ' - ' + msg) : msg;
            console.log(err, 'Err');
            
            return err ? (`${display}<br><span>Message: ${err}</span>`) : display;
          }
        }
      ],
      order: [[1, 'desc']]
    });

  function escapeHtml(text) {
    if (!text) return '';
    return String(text).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;').replace(/'/g,'&#039;');
  }

  // AJAX loader (unchanged)
  function generateData(flag = 'S'){
    $.ajax({
      type: "GET",
      url: "<?= site_url('/man_report_by_flag/'); ?>" + flag,
      dataType: 'html',
      beforeSend: function () { $("#loader").show(); $('#display-content').hide(); },
      success: function (result) {
        var res = JSON.parse(result);
        // if (!table) initializeDataTable();
        table.clear();
        if (Array.isArray(res) && res.length) {
          table.rows.add(res);
        }
        table.draw();

        setTimeout(function(){
        try {
            table.columns.adjust();           // recompute column widths
            if (table.responsive) table.responsive.recalc(); // recalc responsive (if using responsive)
        } catch (e) {
            // ignore if table not ready
            console.warn('columns.adjust error', e);
        }
        }, 0);
      },
      complete: function () { $("#loader").hide(); $('#display-content').show(); },
      error: function () {
        if (table) table.clear().draw();
      }
    });
  }

  $(document).ready(function() {
    $('input[name="txn_status"]').on('change', function(){ generateData($(this).val()) });
    generateData();
  });
</script>