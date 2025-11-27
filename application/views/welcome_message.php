<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html>

<head>
<title>e-Natch</title>
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://www.paynimo.com/paynimocheckout/client/lib/jquery.min.js" type="text/javascript"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="consumer_id" class="form-label">Loan ID <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="consumer_id" name="consumer_id" placeholder="Enter your consumer id">
                            </div>
                            <div class="col-md-4">
                                <label for="cust_name" class="form-label">Consumer Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="cust_name" name="cust_name" placeholder="Enter your consumer Name">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label for="mobile_no" class="form-label">Mobile No</label>
                                <input type="number" class="form-control" id="mobile_no" name="mobile_no" placeholder="Enter your mobile number">
                            </div>
                            <div class="col-md-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email id">
                            </div>
                            <div class="col-md-4">
                                <label for="reg_amt" class="form-label">Registration Amount</label>
                                <input type="number" class="form-control" id="reg_amt" name="reg_amt" placeholder="Enter registration amount">
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-md-4">
                                <label for="ac_no" class="form-label">A/C No</label>
                                <input type="number" class="form-control" id="ac_no" name="ac_no" placeholder="Enter your A/C number">
                            </div>
                            <div class="col-md-4">
                                <label for="bank_code" class="form-label">Bank Code</label>
                                <input type="number" class="form-control" id="bank_code" name="bank_code" placeholder="Enter your bank code">
                            </div>
                            <div class="col-md-4">
                                <label for="bank_code" class="form-label">A/C Type</label>
                                <select class="form-select" id="bank_code" name="bank_code" aria-label="Default select example">
                                    <option value="Saving" selected>Saving</option>
                                    <option value="Current">Current</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="ac_holder_name" class="form-label">A/C Holder Name</label>
                                <input type="text" class="form-control" id="ac_holder_name" name="ac_holder_name" placeholder="Enter your A/C holder name">
                            </div>
                            <div class="col-md-4">
                                <label for="ifs_code" class="form-label">IFS Code</label>
                                <input type="text" class="form-control" id="ifs_code" name="ifs_code" placeholder="Enter your IFS code">
                            </div>
                        </div> -->
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label for="strt_dt" class="form-label">Debit Start Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="strt_dt" name="strt_dt">
                            </div>
                            <div class="col-md-4">
                                <label for="end_dt" class="form-label">Debit End Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="end_dt" name="end_dt">
                            </div>
                            <div class="col-md-4">
                                <label for="bebit_amt" class="form-label">Max Debit Amount <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="bebit_amt" name="bebit_amt" placeholder="Enter your maximum debit amount">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label for="amt_type" class="form-label">Amount Type <span class="text-danger">*</span></label>
                                <select class="form-select" id="amt_type" name="amt_type" aria-label="Default select example">
                                    <option value="M" selected>Variable Amount</option>
                                    <option value="F">Fixed Amount</option>
                                </select>
                            </div>
                        </div>
						<input type="hidden" id="tnxId" name="tnxId" value="<?= $tnxId ?>">
						<input type="hidden" name="token" id="token" value="">
						<div class="row mt-3">
							<div class="col-md-12">
								<button type="button" class="btn btn-success" id="processBtn">Process</button>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<button id="btnSubmit" style="display:none;">Register Now</button>

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
                "token": $('#token').val().toString(),//"042a2fbf02f7cd9cd60d5c9f47c21fc365dff713079ba788d110d53514bed119d946f5776b6e67952784a61e1749e79d004c7871dc3224805e240cd552462cca",
                "returnUrl": "<?= site_url() ?>/welcome/get_response?loan_id="+$('#consumer_id').val()+"&cust_id="+$('#cust_id').val(), //"https://pgproxyuat.in.worldline-solutions.com/linuxsimulator/MerchantResponsePage.jsp",    //merchant response page URL
                "responseHandler": handleResponse,
                "paymentMode": "netBanking",
                "merchantLogoUrl": "https://www.wbscardb.com/wp-content/themes/WBSCARDB-child/assets/images/logo.png",  //provided merchant logo will be displayed
                "merchantId": "T1016979",
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
                //"accountNo": "1234567890",    //Pass this if accountNo is captured at merchant side for eMandate/eNACH
                //"accountHolderName": "Name",  //Pass this if accountHolderName is captured at merchant side for ICICI eMandate & eNACH registration this is mandatory field, if not passed from merchant Customer need to enter in Checkout UI.
                //"ifscCode": "ICIC0000001",        //Pass this if ifscCode is captured at merchant side.
                "accountType": "Saving",  //Required for eNACH registration this is mandatory field
                "debitStartDate": formatDate($('#strt_dt').val()),//"10-03-2019",
                "debitEndDate": formatDate($('#end_dt').val()),//"01-03-2047",
                "maxAmount": $('#bebit_amt').val(),//"100",
                "amountType": $('#amt_type').val(),//"M",
                "frequency": "MNTH" //"ADHO"    //  Available options DAIL, WEEK, MNTH, QURT, MIAN, YEAR, BIMN and ADHO
            }
        };

        // var reqJson = {
        //     "features": {
        //         "enableAbortResponse": true,
        //         "enableExpressPay": true,
        //         "enableMerTxnDetails": true,
        //         "siDetailsAtMerchantEnd": true,
        //         "enableSI": true
        //     },
        //     "consumerData": {
        //         "deviceId": "WEBSH2",    //possible values "WEBSH1" or "WEBSH2"
        //         "token": "68c23fab171b3a648ff37e31f2ab1e96105310600bd4407cded3b6cea22eb1fc7627afc0832b98a18ece81dee3d7ecd9fd99de98fb4d7a3f59369042096b27c7",
        //         "returnUrl": "https://pgproxyuat.in.worldline-solutions.com/linuxsimulator/MerchantResponsePage.jsp",
        //         "responseHandler": handleResponse,
        //         "paymentMode": "netBanking",
        //         "merchantLogoUrl": "https://www.paynimo.com/CompanyDocs/company-logo-vertical.png",
        //         "merchantId": "T1016979",
        //         "currency": "INR",
        //         "consumerId": "c964634",  //Your unique consumer identifier to register a eMandate/eNACH
        //         "txnId": "1708068755987",   //Unique merchant transaction ID
        //         "items": [{
        //             "itemId": "first",
        //             "amount": "1",
        //             "comAmt": "0"
        //         }],
        //         "customStyle": {
        //             "PRIMARY_COLOR_CODE": "#45beaa",   //merchant primary color code
        //             "SECONDARY_COLOR_CODE": "#FFFFFF",   //provide merchant's suitable color code
        //             "BUTTON_COLOR_CODE_1": "#2d8c8c",   //merchant's button background color code
        //             "BUTTON_COLOR_CODE_2": "#FFFFFF"   //provide merchant's suitable color code for button text
        //         },
        //         "accountType": "Saving",  //Required for eNACH registration this is mandatory field
        //         "debitStartDate": formatDate($('#strt_dt').val()),
        //         "debitEndDate": formatDate($('#end_dt').val()),
        //         "maxAmount": $('#bebit_amt').val(),
        //         "amountType": "M",
        //         "frequency": "ADHO"    //  Available options DAIL, WEEK, MNTH, QURT, MIAN, YEAR, BIMN and ADHO
        //     }
        // };

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
		$.ajax({
		    type: "POST",
		    url: "<?= site_url('/welcome/generate_token'); ?>",
		    data: {consumer_id: $('#consumer_id').val(), mobile_no: $('#mobile_no').val(), email: $('#email').val(), strt_dt: $('#strt_dt').val(), end_dt: $('#end_dt').val(), bebit_amt: $('#bebit_amt').val(), amt_type: $('#amt_type').val(), tnxId: $('#tnxId').val(), reg_amt: $('#reg_amt').val()},
		    dataType: 'html',
		    success: function (result) {
				$('#token').val(result)
				$('#btnSubmit').show();
				$('#processBtn').hide()
		    }
		});
	})

    $('#consumer_id').on('change', function(){
		$.ajax({
		    type: "GET",
		    url: "<?= site_url('/welcome/test'); ?>",
		    data: {loan_id: $(this).val()},
		    dataType: 'html',
		    success: function (result) {
                try{
                    var res = JSON.parse(result)
                    $('#cust_id').val(res.CUST_CD ? res.CUST_CD : '')
                    $('#cust_name').val(res.CUST_NAME ? res.CUST_NAME : '')
                    $('#email').val(res.EMAIL ? res.EMAIL : '')
                    $('#mobile_no').val(res.PHONE ? res.PHONE : '')
                    $('#bebit_amt').val(10)
                    $('#reg_amt').val(res.REG_AMT ? res.REG_AMT : '')
                    $('#strt_dt').val(formatDateYMD(res.FIRST_DUE_DT))
                    $('#end_dt').val(formatDateYMD(res.DEBIT_END_DT))
                    console.log(result);
                }catch(err){
                    console.log(err);
                }
		    }
		});
	})
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
