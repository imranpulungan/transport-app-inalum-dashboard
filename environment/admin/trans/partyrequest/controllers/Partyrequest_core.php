<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Master Controller
 *
 * Nah jadi ini fungsinya buat dipanggil di class utamanya nanti
 * Kenapa sih kok ribet? sebenernya enggak
 * cuman buat kalo ada yang nyoba utak atik codingnya tapi gak tau konsepnya bisa setres
 *
 * @package		Izin_kerja Core
 * @subpackage	Izin_kerja Core
 * @author		Alimstudio
 * @link		http://alimstudio.com
 */

class Partyrequest_core extends CI_Controller
{
    private $view;
    public $data2;

    public function __construct()
    {
        parent::__construct();

        Initialized();
    }

    public function index()
    {
        isHasAccessToModule();
        if (!isHeader404()) {
            
            $this->view['title']      = getLangKey('req_bus_party');
            $this->view['content']    = 'trans/request_party/v_request_party';
            $this->view['css']    = [
                'libs/datatables/css/dataTables.bootstrap5.min.css',
                'libs/datatables/css/responsive.bootstrap.min.css',
                'libs/datatables/css/buttons.dataTables.min.css',
                'libs/select2/css/select2.min.css'
            ];
            $this->view['javascript'] = [
                'libs/datatables/js/jquery-3.6.0.min.js',
                'libs/datatables/js/jquery.dataTables.min.js',
                'libs/datatables/js/dataTables.bootstrap5.min.js',
                'libs/datatables/js/dataTables.responsive.min.js',
                'libs/datatables/js/dataTables.buttons.min.js',
                'libs/select2/js/select2.min.js'
            ];

            $this->view['java'] = [
                'path' => 'trans',
                'file' => 'request_party'
            ];

            loadTemplate('layout', $this->view);
        }
    }

    public function load()
    {
        // if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $headers = array(
                'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                'Authorization:' . getSession('token')
            );
            echo base64_encode($this->api->getData(getEnvi('schema') . '/trans/request_party/list', null, false, $headers));
        // } else {
        //     error_404();
        // }
    }

    public function add()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {                        
            $data["id_user"]            = $this->input->post('id_user');
            $data["type_bus"]           = "PARTY";
            $data["id_trip"]            = $this->input->post('id_trip');
            $data["departure_date"]     = $this->input->post('departure_date');
            $data["departure_day"]      = $this->input->post('departure_day');
            $data["total_passenger"]    = $this->input->post('total_passenger');
            $data["schedule_number"]    = $this->input->post('schedule_number');
            $data["departure"]          = $this->input->post('departure');
            $data["arrival"]            = $this->input->post('arrival');
            $data["departure_code"]     = $this->input->post('departure_code');
            $data["arrival_code"]       = $this->input->post('arrival_code');
            $data["departure_time"]     = $this->input->post('departure_time');
            $data["return_date"]        = $this->input->post('return_date');
            $data["return_day"]         = $this->input->post('return_day');
            $data["return_time"]        = $this->input->post('return_time');
            // $data["passengers"]         = json_encode($this->input->post('passengers'));
            
            $this->api->set_headers(
                array(
                    'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                    'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                    'Authorization:' . getSession('token'),
                )
            );            
            $result = $this->api->post(getEnvi('schema') . '/trans/request_party', $data, true);
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('req_bus_party_add_success_header'),
                    'message' => getLangKey('req_bus_party_add_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('req_bus_party_add_failed_header'),
                    'message' => getLangKey('req_bus_party_add_failed_message: Data Permintaan Gagal Disimpan.')
                ]);
            }
        } else {
            error_404();
        }
    }

    public function denied()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['id_request'] = $this->input->post('id_request');            
            $data['notes']      = $this->input->post('notes');     
            
            $this->api->set_headers(
                array(
                    'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                    'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                    'Authorization:' . getSession('token'),
                )
            );            
            $result = $this->api->put(getEnvi('schema') . '/trans/request_party/denied', $data, true);
            
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('req_bus_party_edit_success_header'),
                    'message' => getLangKey('req_bus_party_edit_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('req_bus_party_edit_failed_header'),
                    'message' => getLangKey('req_bus_party_edit_failed_message')
                ]);
            }
        } else {
            error_404();
        }
    }

    public function approve()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['id_request'] = $this->input->post('id_request');            
            $data['notes']      = $this->input->post('notes');     
            
            $this->api->set_headers(
                array(
                    'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                    'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                    'Authorization:' . getSession('token'),
                )
            );            
            $result = $this->api->put(getEnvi('schema') . '/trans/request_party/approve', $data, true);
            
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('req_bus_party_edit_success_header'),
                    'message' => getLangKey('req_bus_party_edit_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('req_bus_party_edit_failed_header'),
                    'message' => getLangKey('req_bus_party_edit_failed_message')
                ]);
            }
        } else {
            error_404();
        }
    }

    public function detail()
    {
        // if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $id_request = $this->input->post('id_request');            
            
            $headers = array(
                'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                'Authorization:' . getSession('token')
            );
            echo $this->api->getData(getEnvi('schema') . '/trans/request_party?id_request='.$id_request, null, false, $headers);
        // } else {
        //     error_404();
        // }
    }    
}



/* End of file Master_core.php */
/* Location: ./application/modules/Master/controllers/Master_core.php */