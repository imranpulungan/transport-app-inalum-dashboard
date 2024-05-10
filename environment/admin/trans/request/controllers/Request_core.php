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

class Request_core extends CI_Controller
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
            
            $this->view['title']      = getLangKey('request');
            $this->view['content']    = 'trans/request/v_request';
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
                'file' => 'request'
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
            echo base64_encode($this->api->getData(getEnvi('schema') . '/trans/request_bus/list', null, false, $headers));
        // } else {
        //     error_404();
        // }
    }

    public function available()
    {
        // if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $month = $this->input->post('month');
            $week = $this->input->post('week');
            $year = $this->input->post('year');
            // var_dump($data);die;
            $headers = array(
                'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                'Authorization:' . getSession('token')
            );
            echo base64_encode($this->api->getData(getEnvi('schema') . '/trans/schedule/available?month='.$month.'&week='.$week.'&year='.$year, null, false, $headers));
        // } else {
        //     error_404();
        // }
    }    

    public function detail()
    {
        // if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $schedule_number = $this->input->get('schedule_number');            
            $headers = array(
                'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                'Authorization:' . getSession('token')
            );
            echo base64_encode($this->api->getData(getEnvi('schema') . '/trans/schedule/detail?schedule_number='.$schedule_number, null, false, $headers));
        // } else {
        //     error_404();
        // }
    }    

    public function add()
    {
        // isHasAccessToModule();
        if (!isHeader404()) {
            
            $this->view['title']      = getLangKey('request');
            $this->view['content']    = 'trans/add_request/v_add_request';
            $this->view['css']    = [
                'libs/datatables/css/dataTables.bootstrap5.min.css',
                'libs/datatables/css/responsive.bootstrap.min.css',
                'libs/datatables/css/buttons.dataTables.min.css',
                'libs/select2/css/select2.min.css'
            ];
            $this->view['javascript'] = [
                // 'libs/datatables/js/jquery-3.6.0.min.js',
                'libs/datatables/js/jquery.dataTables.min.js',
                'libs/datatables/js/dataTables.bootstrap5.min.js',
                'libs/datatables/js/dataTables.responsive.min.js',
                'libs/datatables/js/dataTables.buttons.min.js',
                'libs/select2/js/select2.min.js',              
                'libs/jquery.maskMoney.min.js'      
            ];

            $this->view['java'] = [
                'path' => 'trans',
                'file' => 'add_request'
            ];

            $this->view['schedule_number'] = $_GET['schedule_number'];


            loadTemplate('layout', $this->view);
        }
    }

    public function edit($id)
    {
        // isHasAccessToModule();
        if (!isHeader404()) {
            
            $this->view['title']      = getLangKey('request');
            $this->view['content']    = 'trans/add_request/v_add_request';
            $this->view['css']    = [
                'libs/datatables/css/dataTables.bootstrap5.min.css',
                'libs/datatables/css/responsive.bootstrap.min.css',
                'libs/datatables/css/buttons.dataTables.min.css',
                'libs/select2/css/select2.min.css'
            ];
            $this->view['javascript'] = [
                // 'libs/datatables/js/jquery-3.6.0.min.js',
                'libs/datatables/js/jquery.dataTables.min.js',
                'libs/datatables/js/dataTables.bootstrap5.min.js',
                'libs/datatables/js/dataTables.responsive.min.js',
                'libs/datatables/js/dataTables.buttons.min.js',
                'libs/select2/js/select2.min.js', 
                'libs/jquery.maskMoney.min.js'      
            ];

            $this->view['java'] = [
                'path' => 'trans',
                'file' => 'add_request'
            ];

            loadTemplate('layout', $this->view);
        }
    }

    public function insert()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {            
            $data = [
                "type_bus" => $this->input->post('type_schedule_bus'),
                "departure_date" => $this->input->post('departure_date'),
                "departure_day" => $this->input->post('departure_day'),                
                "total_passenger" => $this->input->post('total_passenger'),
                "schedule_number" => $this->input->post('schedule_number'),
                "departure" => $this->input->post('departure'),
                "arrival" => $this->input->post('arrival'),
                "departure_time" => $this->input->post('departure_time'),
                "arrival_date" => $this->input->post('arrival_date'),
                "arrival_day" => $this->input->post('arrival_day'),
                "arrival_time" => $this->input->post('arrival_time'),
            ];

            $this->api->set_headers(
                array(
                    'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                    'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                    'Authorization:' . getSession('token'),
                )
            );            

            $result = $this->api->post(getEnvi('schema') . '/trans/request_bus', $data, true);               
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('asset_add_success_header'),
                    'message' => getLangKey('asset_add_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('asset_add_failed_header'),
                    'message' => $result->error
                ]);
            }
        } else {
            error_404();
        }
    }

    public function delete()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['id_revaluation'] = $this->input->post('id_revaluation');            
            $result = $this->api->delete(getEnvi('schema') . '/trans/revaluation', $data, true);
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('revaluation_delete_success_header'),
                    'message' => getLangKey('revaluation_delete_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('revaluation_delete_failed_header'),
                    'message' => getLangKey('revaluation_delete_failed_message')
                ]);
            }
        } else {
            error_404();
        }
    }
}



/* End of file Master_core.php */
/* Location: ./application/modules/Master/controllers/Master_core.php */