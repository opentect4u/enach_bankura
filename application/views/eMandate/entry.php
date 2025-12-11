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
                <div class="row">
                    <div class="col-md-4">
                        <label for="consumer_id" class="form-label">Loan ID <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm" id="consumer_id" name="consumer_id" placeholder="Enter your consumer id">
                    </div>
                    <div class="col-md-4">
                        <label for="cust_name" class="form-label">Customer Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm" id="cust_name" name="cust_name" placeholder="Enter your consumer Name">
                    </div>
                    <div class="col-md-4">
                        <label for="cust_id" class="form-label">Customer ID <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm" id="cust_id" name="cust_id" placeholder="Enter your consumer ID">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <label for="mobile_no" class="form-label">Mobile No</label>
                        <input type="number" class="form-control form-control-sm" id="mobile_no" name="mobile_no" placeholder="Enter your mobile number">
                    </div>
                    <div class="col-md-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="Enter your email id">
                    </div>
                    <div class="col-md-4">
                        <label for="reg_amt" class="form-label">Amount to be debited <span class="text-danger">*</span></label>
                        <input type="number" class="form-control form-control-sm" id="reg_amt" name="reg_amt" placeholder="Enter registration amount">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <label for="strt_dt" class="form-label">Debit Start Date <span class="text-danger">*</span></label>
                        <input type="date" class="form-control form-control-sm" id="strt_dt" name="strt_dt">
                    </div>
                    <div class="col-md-4">
                        <label for="end_dt" class="form-label">Debit End Date <span class="text-danger">*</span></label>
                        <input type="date" class="form-control form-control-sm" id="end_dt" name="end_dt">
                    </div>
                    <div class="col-md-4">
                        <label for="bebit_amt" class="form-label">Max Debit Amount <span class="text-danger">*</span></label>
                        <input type="number" class="form-control form-control-sm" id="bebit_amt" name="bebit_amt" placeholder="Enter your maximum debit amount">
                    </div>
                </div>
				<?php /*
                <div class="row mt-3">
                    <div class="col-md-4">
                        <label for="amt_type" class="form-label">Amount Type <span class="text-danger">*</span></label>
                        <select class="form-control form-control-sm" id="amt_type" name="amt_type" aria-label="Default select example">
                            <option value="M" selected>Variable Amount</option>
                            <option value="F">Fixed Amount</option>
                        </select>
                    </div>
                </div>
				*/ ?>
				
                <input type="hidden" id="amt_type" name="amt_type" value="M">
                <input type="hidden" id="tnxId" name="tnxId" value="<?= $tnxId ?>">
                <input type="hidden" name="token" id="token" value="">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="form-check d-flex align-items-center">
                            <input class="form-check-input" type="checkbox" id="termsCheckbox" required>
                            <label class="form-check-label" for="termsCheckbox">
                                I accept the <a href="https://bankuracardbank.com/terms-conditions/" target="_blank">Terms & Conditions.</a>
                            </label>
                        </div>

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <button type="button" class="btn bg-success btn-success" id="processBtn">Process</button>
                        <button id="btnSubmit" class="btn bg-success btn-success" style="display:none;">Register Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://www.paynimo.com/paynimocheckout/client/lib/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://www.paynimo.com/paynimocheckout/server/lib/checkout.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    setStrtDate();
    function handleResponse(res) {
        console.log(res);
        if (typeof res != "undefined" && typeof res.paymentMethod != "undefined" && typeof res.paymentMethod.paymentTransaction != "undefined" && typeof res.paymentMethod.paymentTransaction.statusCode != "undefined" && res.paymentMethod.paymentTransaction.statusCode == "0300") {
            // success block
        } else if (typeof res != "undefined" && typeof res.paymentMethod != "undefined" && typeof res.paymentMethod.paymentTransaction != "undefined" && typeof res.paymentMethod.paymentTransaction.statusCode != "undefined" && res.paymentMethod.paymentTransaction.statusCode == "0398") {
            // initiated block
        } else {
            // error block
        }
    };

    $(document).off("click", "#btnSubmit").on("click", "#btnSubmit", function(e) {
        e.preventDefault();

        var reqJson = {
            "features": {
                "enableAbortResponse": true,
                "enableNewWindowFlow": true,    //for hybrid applications please disable this by passing false
                "enableExpressPay": true,
                "enableMerTxnDetails": true,
                "siDetailsAtMerchantEnd": true,
                "enableSI": true
            },
            "consumerData": {
                "deviceId": "WEBSH2",    //possible values "WEBSH1" or "WEBSH2"
                "token": $('#token').val().toString(),
                "returnUrl": "<?= site_url() ?>/tnx_resp?loan_id="+$('#consumer_id').val()+"&cust_id="+$('#cust_id').val()+"&tnx_id=<?= $tnxId ?>&flag=<?= $flag ?>&cust_name="+$('#cust_name').val()+"&t_and_c="+($('#termsCheckbox').is(':checked') ? 'Y' : 'N')+"&strt_dt="+ encodeURIComponent($('#strt_dt').val())+"&end_dt="+encodeURIComponent($('#end_dt').val()),    //Your return URL where Paynimo will send the response,
                "responseHandler": handleResponse,
                "paymentMode": "netBanking",
                "merchantLogoUrl": "https://enach.bankuracardbank.com/assets/images/logo-bankura-ardb.jpg",  //provided merchant logo will be displayed
                "merchantId": "<?= MERCHANT_CODE ?>",
                "currency": "INR",
                "consumerId": $('#consumer_id').val(),//"c964634",  //Your unique consumer identifier to register a eMandate/eNACH
                "consumerMobileNo": $('#mobile_no').val(),//"9876543210",
                "consumerEmailId": $('#email').val(),//"test@test.com",
                "txnId": $('#tnxId').val(),//"1698643446222",   //Unique merchant transaction ID
                "items": [{
                    "itemId": "first",
                    "amount": $('#reg_amt').val(),
                    "comAmt": "0"
                }],
                "customStyle": {
                    "PRIMARY_COLOR_CODE": "#45beaa",   //merchant primary color code
                    "SECONDARY_COLOR_CODE": "#FFFFFF",   //provide merchant's suitable color code
                    "BUTTON_COLOR_CODE_1": "#2d8c8c",   //merchant's button background color code
                    "BUTTON_COLOR_CODE_2": "#FFFFFF"   //provide merchant's suitable color code for button text
                },
                "accountType": "Saving",  //Required for eNACH registration this is mandatory field
                "debitStartDate": formatDate($('#strt_dt').val()),//"10-03-2019",
                "debitEndDate": formatDate($('#end_dt').val()),//"01-03-2047",
                "maxAmount": $('#bebit_amt').val(),//"100",
                "amountType": $('#amt_type').val(),//"M",
                "frequency": "MNTH" //"ADHO"    //  Available options DAIL, WEEK, MNTH, QURT, MIAN, YEAR, BIMN and ADHO
            }
        };

        console.log(reqJson);

        $.pnCheckout(reqJson);
        if(reqJson.features.enableNewWindowFlow){
            pnCheckoutShared.openNewWindow();
        }
    });
});

    function formatDate(inputDate) {
        const date = new Date(inputDate);
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        return `${day}-${month}-${year}`;
    }

    function formatDateYMD(inputDate) {
        const date = new Date(inputDate);
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        return `${year}-${month}-${day}`;
    }
	
    function dateCalculator(st_dt, end_dt){
        var strt_date = new Date(st_dt),
        end_date = new Date(end_dt),
        curr_dt = new Date();
        var end_dt = new Date(curr_dt.getFullYear(), curr_dt.getMonth()+1, 0)
        if(end_date.getTime() > curr_dt.getTime()){
            if(strt_date.getTime() > curr_dt.getTime()){
                return st_dt
            }else{
                return end_dt
            }
        }else{
            return end_dt
        }
    }
</script>
<script>
    function setStrtDate(){
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();

        if (dd < 10) {
        dd = '0' + dd;
        }

        if (mm < 10) {
        mm = '0' + mm;
        } 
            
        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById("strt_dt").setAttribute("min", today);
    }
    $('#strt_dt').on('change', function(){
        $('#end_dt').attr('min', $(this).val())
    })
</script>
<script>
	$('#processBtn').on('click', function(){
        if($('#termsCheckbox').is(':checked')){
            $.ajax({
                type: "POST",
                url: "<?= site_url('/generate_token'); ?>",
                data: {consumer_id: $('#consumer_id').val(), mobile_no: $('#mobile_no').val(), email: $('#email').val(), strt_dt: $('#strt_dt').val(), end_dt: $('#end_dt').val(), bebit_amt: $('#bebit_amt').val(), amt_type: $('#amt_type').val(), tnxId: $('#tnxId').val(), reg_amt: $('#reg_amt').val()},
                dataType: 'html',
                beforeSend: function () {
                    // Show image container
                    $("#loader").show();
                    $('#display-content').hide();
                },
                success: function (result) {
                    $('#token').val(result)
                    $('#btnSubmit').show();
                    $('#processBtn').hide()
                },
                complete: function (data) {
                    // Hide image container
                    $("#loader").hide();
                    $('#display-content').show();
                }
            });
        }else{
            triggerSweetAlert("Warning", "Please accept the Terms and Conditions to proceed.", "warning")
        }
	})

    $('#consumer_id').on('change', function(){
		$.ajax({
		    type: "POST",
		    url: "<?= site_url('/get_user_data'); ?>",
		    data: {loan_id: $(this).val()},
		    dataType: 'html',
            beforeSend: function () {
                // Show image container
                $("#loader").show();
                $('#display-content').hide();
            },
		    success: function (result) {
                try{
                    var res = JSON.parse(result)
                    var str_dt = dateCalculator(res.FIRST_DUE_DT, res.DEBIT_END_DT)
                    $('#cust_id').val(res.CUST_CD ? res.CUST_CD : '')
                    $('#cust_name').val(res.CUST_NAME ? res.CUST_NAME : '')
                    $('#email').val(res.EMAIL ? res.EMAIL : '')
                    $('#mobile_no').val(res.PHONE ? res.PHONE : '')
                    $('#bebit_amt').val(100000)
                    $('#reg_amt').val(res.REG_AMT ? res.REG_AMT : '')
                    $('#strt_dt').val(formatDateYMD(str_dt))
                    $('#end_dt').val(formatDateYMD(res.DEBIT_END_DT))
                    console.log(result);
                }catch(err){
                    console.log(err);
                }
		    },
            complete: function (data) {
                // Hide image container
                $("#loader").hide();
                $('#display-content').show();
            }
		});
	})
</script>