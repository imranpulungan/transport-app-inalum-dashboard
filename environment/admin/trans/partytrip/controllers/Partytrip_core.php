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

class Partytrip_core extends CI_Controller
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
            
            $this->view['title']      = getLangKey('trip_party');
            $this->view['content']    = 'trans/trip_party/v_trip_party';
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
                'file' => 'trip_party'
            ];

            loadTemplate('layout', $this->view);
        }
    }

    public function add()
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

            $result = $this->api->post(getEnvi('schema') . '/trans/trip_party', $data, true);

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

    public function load()
    {
        // if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $headers = array(
                'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                'Authorization:' . getSession('token')
            );
            echo base64_encode($this->api->getData(getEnvi('schema') . '/trans/trip_party/list', null, false, $headers));
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
}



/* End of file Master_core.php */
/* Location: ./application/modules/Master/controllers/Master_core.php */