<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaction_model extends CI_Model
{
    function tnx_save($data){
        if($this->db->insert('td_transaction', $data)){
            return true;
        }else{
            return false;
        }
    }

    function local_tnx_dtls($src_dt, $flag = null){
        $this->db->select('*');
        if($flag){
            switch ($flag) {
                case 'S':
                    $this->db->where('txn_status = "0300"');
                    break;
                case 'P':
                    $this->db->where('txn_status = "0396"');
                    break;
                case 'O':
                    $this->db->where('txn_status IN ("0398", "0399", "0392")');
                    break;
                default:
                    $this->db->where('txn_status IN ("0398", "0399", "0392")');
                    break;
            }
        }else{
            $this->db->where("cust_id = '" . $src_dt['search_val'] . "' OR loan_id = '" . $src_dt['search_val'] . "' OR umrn_number = '" .$src_dt['search_val'] . "'");
        }
        $query = $this->db->get('td_transaction');
        return $query->result();
    }

    function getTnxVerifyApi($tnx_iden, $tnx_date, $cust_iden){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://www.paynimo.com/api/paynimoV2.req',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS =>'{
            "merchant": {
                "identifier": "'. MERCHANT_CODE .'"
            },
            "payment": {
                "instruction": {}
            },
            "transaction": {
                "deviceIdentifier": "S",
                "type": "002",
                "currency": "INR",
                "identifier": "'.$tnx_iden.'",
                "dateTime": "'.$tnx_date.'",
                "subType": "002",
                "requestType": "TSI"
            },
            "consumer": {
                "identifier": "'.$cust_iden.'"
            }
            }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Cookie: JSESSIONID=sxtuZrPH-p53wXOgSyM96xPaxACfRbO5oJuLMIIL.we-eq2-p7vm01'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

    function callAPIStatus($data_arr){
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
			return true;
		}else{
			return false;
		}
    }
}