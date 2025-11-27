<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
   		$txnId = substr(str_shuffle($characters), 0, 10);
		// var_dump($txnId);
		// exit;
		$data = array(
			'tnxId' => $txnId
		);
		$this->load->view('welcome_message', $data);
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

	function get_response(){
		var_dump(json_encode($_REQUEST));
	}

	function test(){
		$loan_id = isset($_GET['loan_id']) ? $_GET['loan_id'] : 0;
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

		// Convert the JSON string to a buffer
		$buffer = utf8_encode(json_encode($data_arr));

		$hexBuffer = bin2hex($buffer);

		$req_data = array(
			"data" => $hexBuffer
		);

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3000/api/get_res',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => json_encode($req_data),
		CURLOPT_HTTPHEADER => array(
			'X-Auth: 21ea69356c738060b4cc105df661c89e5af40264fe42c52346741ceef0bf1a212aed4ebf731999891757c1509306de5a',
			'Content-Type: application/json'
		),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$res_dt = json_decode($response);
		if($res_dt->suc > 0){
			// Convert the hex string to binary
			$binaryBuffer = hex2bin($res_dt->msg);

			// Convert the binary data to UTF-8 string
			$string = utf8_decode($binaryBuffer);
			echo $string;
		}else{
			echo 'Something wents wrong';
		}
		// var_dump($res_dt);
	}
}
