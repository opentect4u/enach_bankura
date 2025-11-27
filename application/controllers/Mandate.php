<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mandate extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('transaction_model');
    }

    function entry(){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
   		$txnId = substr(str_shuffle($characters), 0, 10);

        $data = array(
            'header' => 'eMandate Registration',
			'tnxId' => $txnId,
			'flag' => 'I'
        );

        $this->template->load('eMandate/entry', $data);
    }

    function generate_token(){
		$data = $this->input->post();
		$saltKey = SALT_KEY;
		$merchantId = MERCHANT_CODE;
		// var_dump($data);exit;
		$dt = $merchantId.'|'.$data["tnxId"].'|'.(int)$data["reg_amt"].'||'.$data["consumer_id"].'|'.$data["mobile_no"].'|'.$data["email"].'|'.date('d-m-Y', strtotime($data["strt_dt"])).'|'.date('d-m-Y', strtotime($data["end_dt"])).'|'.$data["bebit_amt"].'|'.$data["amt_type"].'|MNTH|||||'.$saltKey.'';
		// echo $dt;exit;
		echo hash('sha512', $dt);
	}

    function get_user_data(){
		$loan_id = isset($_POST['loan_id']) ? $_POST['loan_id'] : 0;
		$select = '*';
		$table_name = 'v_nach_data';
		$where = "loan_id = $loan_id";
		$order = null;
		$data_arr = array(
			'select' => $select,
			'table_name' => $table_name,
			'where' => $where,
			'order' => $order,
			"flag" => 0
		);

		// FOR ENCODING DATA SEND
		// Convert the JSON string to a buffer
		// $buffer = utf8_encode(json_encode($data_arr));

		// $hexBuffer = bin2hex($buffer);

		// $req_data = array(
		// 	"data" => $hexBuffer
		// );
		// END

		$req_data = array(
			"data" => $data_arr
		);

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL . '/api/get_res',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => json_encode($req_data),
		CURLOPT_HTTPHEADER => array(
			'X-Auth: '. API_AUTH_KEY,
			'Content-Type: application/json'
		),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$res_dt = json_decode($response);
		if($res_dt->suc > 0){
			// HASHED DATA SET FROM API //
			// // Convert the hex string to binary
			// $binaryBuffer = hex2bin($res_dt->msg);

			// // Convert the binary data to UTF-8 string
			// $string = utf8_decode($binaryBuffer);
			// END //
			$string = json_encode($res_dt->msg);
			echo $string;
		}else{
			echo 'Something wents wrong - subham';
		}
		// var_dump($res_dt);
	}

	function save_data_to_orcl($data_arr){
		// Convert the JSON string to a buffer
		// $buffer = utf8_encode(json_encode($data_arr));

		// $hexBuffer = bin2hex($buffer);

		// $req_data = array(
		// 	"data" => $hexBuffer
		// );

		$req_data = array(
			"data" => $data_arr
		);

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => API_URL . '/api/data_insert',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => json_encode($req_data),
		CURLOPT_HTTPHEADER => array(
			'X-Auth: '. API_AUTH_KEY,
			'Content-Type: application/json'
		),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$res_dt = json_decode($response);
		if($res_dt->suc > 0){
			// Convert the hex string to binary
			// $binaryBuffer = hex2bin($res_dt->msg);

			// // Convert the binary data to UTF-8 string
			// $string = utf8_decode($binaryBuffer);
			// $response = json_decode($string);
			echo true;
		}else{
			echo false;
		}
	}

    function get_tnx_response(){
		// var_dump($_REQUEST);
		$data = $_REQUEST;
		$myfile = fopen("response_file/".$data['tnx_id'].".txt", "w");
		$txt = json_encode($data);
		fwrite($myfile, $txt);
		fclose($myfile);
        // $data = '{"loan_id":"10311","cust_id":"103558","msg":"0300|success||iI9KszA6Fb|11060|339865395|10.00|{itc:~mandateData{UMRNNumber:SBIN7022805245014003~IFSCCode:SBIN0004343~amount_type:M~frequency:MNTH~account_number:42049874517~expiry_date:28-05-2025~ifsc_code:~amount:10~identifier:~schedule_date:28-05-2024~debitDay:~debitFlag:N~aadharNo:~accountHolderName:Debasish Adhikary~accountType:Saving~dateOfBirth:~mandatePurpose:~utilityNo:~helpdeskNo:~helpdeskEmail:~pan:~phoneNumber:~emailID:}}|28-05-2024 15:39:44|NA|||145751939b514df2a0667f42713eddf9|1081815612|ffdcff03-c5a3-46a3-8a9c-096a8f507712|e9193e9d6314af2fae6ee3317be2c9e8e88a0f53f259381df915dc136db20a7760448e8b37327469653b5dbe03f4a302f84fb7b2f607a34f1110383ae17c5627"}';
        try {
            // $dec_data = json_decode($data);
			// var_dump($_SESSION['user']);exit;
            $dec_data = $data;
            $loan_id = $dec_data['loan_id'];
            $cust_id = $dec_data['cust_id'];
            $resp_msg = $dec_data['msg'];
			$flag = $dec_data['flag'];
			$cust_name = $dec_data['cust_name'];

			// $loan_id = $dec_data->loan_id;
            // $cust_id = $dec_data->cust_id;
            // $resp_msg = $dec_data->msg;

            $resp_msg_arr = explode('|', $resp_msg);
			$umrnNumberFirst = explode('UMRNNumber:', $resp_msg_arr[7]);
			$umrnNumber = count($umrnNumberFirst) > 1 ? explode('~', $umrnNumberFirst[1]) : null;
			$umrnNumber = $umrnNumber ? $umrnNumber[0] : 0;
			// var_dump($umrnNumber);
			// var_dump(explode('~', explode('UMRNNumber:', $resp_msg_arr[7])[1])[0]);exit;
            if(is_array($resp_msg_arr)){
                $tnx_dt_arr = array(
                    "cust_id" => $cust_id,
					"cust_name" => $cust_name,
                    "loan_id" => $loan_id,
                    "txn_status" => $resp_msg_arr[0],
                    "txn_msg" => $resp_msg_arr[1],
                    "txn_err_msg" => $resp_msg_arr[2],
                    "clnt_txn_ref" => $resp_msg_arr[3],
                    "tpsl_bank_cd" => $resp_msg_arr[4],
                    "tpsl_txn_id" => $resp_msg_arr[5],
                    "txn_amt" => $resp_msg_arr[6],
                    "tpsl_txn_date_time" => date('Y-m-d h:i:s', strtotime($resp_msg_arr[8])),
                    "bank_tnx_id" => $resp_msg_arr[12],
                    "mandate_reg_no" => $resp_msg_arr[13],
					"umrn_number" => $umrnNumber
                );
				$api_data_orc = array(
					"table_name" => "m_enach_reg_data",
					"fields" => "LOAN_ID, CLIENT_ID, TXN_STATUS, TXN_MSG, TXN_ERR_MSG, CLNT_TXN_REF, TPSL_BANK_CD, TPSL_TXN_ID, TXN_AMT, TPSL_TXN_DATE_TIME, UMRNNUMBER, CREATED_BY, CREATED_DT, MANDATE_REG_NO",
					"val" => ":0, :1, :2, :3, :4, :5, :6, :7, :8, :9, :10, :11, :12, :13",
					"values" => array($tnx_dt_arr['loan_id'], $tnx_dt_arr['cust_id'], $tnx_dt_arr['txn_status'], $tnx_dt_arr['txn_msg'], $tnx_dt_arr['txn_err_msg'], $tnx_dt_arr['clnt_txn_ref'], $tnx_dt_arr['tpsl_bank_cd'], $tnx_dt_arr['tpsl_txn_id'], (int)$tnx_dt_arr['txn_amt'], $tnx_dt_arr['tpsl_txn_date_time'], $tnx_dt_arr['umrn_number'], $_SESSION['user']['user_name'], date('Y-m-d h:i:s'), $resp_msg_arr[13]),
					"whr" => null,
					"flag" => 0
				);
				// var_dump($api_data_orc);exit;
				// var_dump($orc_save);exit;
				// $orc_save = $this->save_data_to_orcl($api_data_orc);

                if($this->transaction_model->tnx_save($tnx_dt_arr)){
					switch ($resp_msg_arr[0]) {
						case '0300':
							$this->session->set_flashdata('title', 'eMandate Registration');
							$this->session->set_flashdata('msg', 'Successfully Registered! \n Your UMRNNumber is '.$tnx_dt_arr['umrn_number']);
							$this->session->set_flashdata('status', 'success');
							break;
						case '0398':
							$this->session->set_flashdata('title', 'eMandate Registration');
							$this->session->set_flashdata('msg', 'Successfully Initiated');
							$this->session->set_flashdata('status', 'success');
							break;
						case '0399':
							$this->session->set_flashdata('title', 'eMandate Registration');
							$this->session->set_flashdata('msg', $tnx_dt_arr['txn_err_msg']);
							$this->session->set_flashdata('status', 'error');
							break;
						case '0396':
							$this->session->set_flashdata('title', 'eMandate Registration');
							$this->session->set_flashdata('msg', $tnx_dt_arr['txn_msg']);
							$this->session->set_flashdata('status', 'info');
							break;
						case '0392':
							$this->session->set_flashdata('title', 'eMandate Registration');
							$this->session->set_flashdata('msg', $tnx_dt_arr['txn_msg']);
							$this->session->set_flashdata('status', 'error');
							break;
						
						default:
							break;
					}
					if($flag == 'I')
						redirect('emandate');
					else
						redirect('manreg');
                }else{
					$this->session->set_flashdata('title', 'eMandate Registration');
                    $this->session->set_flashdata('msg', "Error occurs while saving data.");
                    $this->session->set_flashdata('msg', 'error');
					if($flag == 'I')
						redirect('emandate');
					else
						redirect('manreg');
                }
            }else{
                throw new Exception("Error Processing Request", 1);
				if($flag == 'I')
					redirect('emandate');
				else
					redirect('manreg');
            }
        } catch (\Throwable $th) {
            var_dump($th); exit;
        }
    }

	function mandate_entry_outside(){
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
   		$txnId = substr(str_shuffle($characters), 0, 10);

        $data = array(
            'header' => 'eMandate Registration',
			'tnxId' => $txnId,
			'flag' => 'O'
        );
		$this->load->view('eMandate/entry_out', array('data' => $data));
	}
}
?>