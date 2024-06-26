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

class Schedule_core extends CI_Controller
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
            
            $this->view['title']      = getLangKey('schedule');
            $this->view['content']    = 'trans/schedule/v_schedule';
            $this->view['css']    = [
                'libs/datatables/css/dataTables.bootstrap5.min.css',
                'libs/datatables/css/responsive.bootstrap.min.css',
                'libs/datatables/css/buttons.dataTables.min.css',
                'libs/select2/css/select2.min.css'
            ];
            $this->view['javascript'] = [
                'libs/datatables/js/jquery-3.6.0.min.js',
                'libs/datatables/js/jquery.dataTables.min.js',
                // 'libs/datatables/js/dataTables.bootstrap5.min.js',
                // 'libs/datatables/js/dataTables.responsive.min.js',
                // 'libs/datatables/js/dataTables.buttons.min.js',
                'libs/select2/js/select2.min.js'
            ];

            $this->view['java'] = [
                'path' => 'trans',
                'file' => 'schedule'
            ];

            loadTemplate('layout', $this->view);
        }
    }

    public function load()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['role'] = getSession('role');            
            $headers = array(
                'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                'Authorization:' . getSession('token')
            );
            echo base64_encode($this->api->getData(getEnvi('schema') . '/trans/schedule/list', $data, false, $headers));
        } else {
            error_404();
        }
    }    

    public function add()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {   
            $data['type_schedule_bus']  =  $this->input->post('type_schedule_bus');
            $data['schedule_number']    =  $this->input->post('type_schedule_bus') ."-". date("Ymdhis");
            $data['departure']          =  $this->input->post('departure');
            $data['arrival']            =  $this->input->post('arrival');
            $data['departure_date']     =  $this->input->post('departure_date');
            $data['departure_day']      =  $this->input->post('departure_day');            
            $data['departure_time']     =  $this->input->post('departure_time');
                        
            $this->api->set_headers(
                array(
                    'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                    'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                    'Authorization:' . getSession('token'),
                )
            );  
            $result = $this->api->post(getEnvi('schema') . '/trans/schedule', $data);                    
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('schedule_add_success_header'),
                    'message' => getLangKey('schedule_add_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('schedule_add_failed_header'),
                    'message' => $result->error
                ]);
            }
        } else {
            error_404();
        }
    }

    public function edit()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {            
            $data['type_schedule_bus']  =  $this->input->post('type_schedule_bus');
            $data['schedule_number']    =  $this->input->post('schedule_number');
            $data['departure']          =  $this->input->post('departure');
            $data['arrival']            =  $this->input->post('arrival');
            $data['departure_date']     =  $this->input->post('departure_date');
            $data['departure_day']      =  $this->input->post('departure_day');            
            $data['departure_time']     =  $this->input->post('departure_time');
            $data['return_date']       =  $this->input->post('return_date');
            $data['return_day']        =  $this->input->post('return_day');
            $data['return_time']       =  $this->input->post('return_time');         
            
            $this->api->set_headers(
                array(
                    'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                    'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                    'Authorization:' . getSession('token'),
                )
            );        
            $result = $this->api->put(getEnvi('schema') . '/trans/schedule', $data, true);
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('schedule_add_success_header'),
                    'message' => getLangKey('schedule_add_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('schedule_add_failed_header'),
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
            $data['schedule_number'] = $this->input->post('schedule_number');            
            $result = $this->api->delete(getEnvi('schema') . '/trans/schedule', $data, true);
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('schedule_delete_success_header'),
                    'message' => getLangKey('schedule_delete_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('schedule_delete_failed_header'),
                    'message' => getLangKey('schedule_delete_failed_message')
                ]);
            }
        } else {
            error_404();
        }
    }
}



/* End of file Master_core.php */
/* Location: ./application/modules/Master/controllers/Master_core.php */