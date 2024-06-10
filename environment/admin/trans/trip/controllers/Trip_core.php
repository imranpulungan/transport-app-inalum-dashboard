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

class Trip_core extends CI_Controller
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
            
            $this->view['title']      = getLangKey('trip');
            $this->view['content']    = 'trans/trip/v_trip';
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
                'file' => 'trip'
            ];

            loadTemplate('layout', $this->view);
        }
    }

    public function add()
    {
        // isHasAccessToModule();
        if (!isHeader404()) {
            
            $this->view['title']      = getLangKey('trip');
            $this->view['content']    = 'trans/add_trip/v_add_trip';
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
                'file' => 'add_trip'
            ];

            $this->view['schedule_number'] = $_GET['schedule_number'];


            loadTemplate('layout', $this->view);
        }
    }

    public function edit()
    {
        // isHasAccessToModule();
        if (!isHeader404()) {
            
            $this->view['title']      = getLangKey('trip');
            $this->view['content']    = 'trans/edit_trip/v_edit_trip';
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
                'file' => 'edit_trip'
            ];

            loadTemplate('layout', $this->view);
        }
    }

    public function seat()
    {
        if (!isHeader404()) {
            
            $this->view['title']      = getLangKey('trip');
            $this->view['content']    = 'trans/seat_trip/v_seat_trip';
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
                'file' => 'seat_trip'
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
            echo base64_encode($this->api->getData(getEnvi('schema') . '/trans/trip_bus/list', null, false, $headers));
        // } else {
        //     error_404();
        // }
    }    

    public function detail()
    {
        // if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $id_trip = $this->input->post('id_trip');            
            
            $headers = array(
                'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                'Authorization:' . getSession('token')
            );
            echo base64_encode($this->api->getData(getEnvi('schema') . '/trans/trip_bus/detail?id_trip='.$id_trip, null, false, $headers));
        // } else {
        //     error_404();
        // }
    }        

    public function insert()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {            
            
            $data = $this->input->post();

            $this->api->set_headers(
                array(
                    'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                    'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                    'Authorization:' . getSession('token'),
                )
            );            

            $result = $this->api->post(getEnvi('schema') . '/trans/trip_bus', $data, true);

            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('req_bus_weekend_add_success_header'),
                    'message' => getLangKey('req_bus_weekend_add_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('req_bus_weekend_add_failed_header'),
                    'message' => getLangKey('req_bus_weekend_add_failed_message: Data Permintaan Gagal Disimpan.')
                ]);
            }
        } else {
            error_404();
        }
    }

    public function delete()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['id_trip'] = $this->input->post('id_trip');            
            $result = $this->api->delete(getEnvi('schema') . '/trans/trip_bus', $data, true);
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('req_bus_weekend_delete_success_header'),
                    'message' => getLangKey('req_bus_weekend_delete_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('req_bus_weekend_delete_failed_header'),
                    'message' => getLangKey('req_bus_weekend_delete_failed_message')
                ]);
            }
        } else {
            error_404();
        }
    }    

    public function availableseat()
    {
        // if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $id_trip = $this->input->post('id_trip');            
            $headers = array(
                'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                'Authorization:' . getSession('token')
            );
            echo base64_encode($this->api->getData(getEnvi('schema') . '/trans/seat/available?id_trip='.$id_trip, null, false, $headers));
        // } else {
        //     error_404();
        // }
    }

    public function availableschedule()
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

    public function detailschedule()
    {
        // if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $schedule_number = $this->input->post('schedule_number');            

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

    public function approvedpassenger()
    {
        // if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $id_trip = $this->input->post('id_trip');

            $headers = array(
                'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                'Authorization:' . getSession('token')
            );
            echo base64_encode($this->api->getData(getEnvi('schema') . '/trans/seat/passenger?id_trip='.$id_trip, null, false, $headers));
        // } else {
        //     error_404();
        // }
    }

    public function updateseat()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {            
            
            $data = $this->input->post();

            $this->api->set_headers(
                array(
                    'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                    'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                    'Authorization:' . getSession('token'),
                )
            );   
            
            
            $result = $this->api->put(getEnvi('schema') . '/trans/seat/passenger', $data, true);
            
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('req_bus_weekend_add_success_header'),
                    'message' => getLangKey('req_bus_weekend_add_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('req_bus_weekend_add_failed_header'),
                    'message' => getLangKey('req_bus_weekend_add_failed_message: Data Permintaan Gagal Disimpan.')
                ]);
            }
        } else {
            error_404();
        }
    }
}



/* End of file Master_core.php */
/* Location: ./application/modules/Master/controllers/Master_core.php */