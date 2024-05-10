<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Master Controller
 *
 * Nah jadi ini fungsinya buat dipanggil di class utamanya nanti
 * Kenapa sih kok ribet? sebenernya enggak
 * cuman buat kalo ada yang nyoba utak atik codingnya tapi gak tau konsepnya bisa setres
 *
 * @package		User Core
 * @subpackage	User Core
 * @author		Alimstudio
 * @link		http://alimstudio.com
 */

class Vehicle_core extends CI_Controller
{
    private $view;

    public function __construct()
    {
        parent::__construct();
        Initialized();
    }

    public function index()
    {
        isHasAccessToModule();
        if (!isHeader404()) {
            
            $this->view['title']      = getLangKey('vehicle');
            $this->view['content']    = 'master/vehicle/v_vehicle';
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
                'path' => 'master',
                'file' => 'vehicle'
            ];

            loadTemplate('layout', $this->view);
        }
    }

    public function add()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['kd_kendaraan']   = $this->input->post('plat_kendaraan');
            $data['model']          = $this->input->post('model');
            
            $this->api->set_headers(
                array(
                    'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                    'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                    'Authorization:' . getSession('token'),
                )
            );            

            $result = $this->api->post(getEnvi('schema') . '/master/vehicle', $data, true);                    
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('kendaraan_add_success_header'),
                    'message' => getLangKey('kendaraan_add_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('kendaraan_add_failed_header'),
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
            $data['kd_kendaraan']   = $this->input->post('plat_kendaraan');
            $data['model']          = $this->input->post('model');
            
            $this->api->set_headers(
                array(
                    'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                    'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                    'Authorization:' . getSession('token'),
                )
            );        
            $result = $this->api->put(getEnvi('schema') . '/master/vehicle', $data, true);
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('kendaraan_edit_success_header'),
                    'message' => getLangKey('kendaraan_edit_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('kendaraan_edit_failed_header'),
                    'message' => $result->error
                ]);
            }
        } else {
            error_404();
        }
    }

    public function detail()
    {
        if ($this->input->get('scrty') == true && hasOwnProgram()) {
            $headers = array(
                'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                'Authorization:' . getSession('token')
            );
            echo base64_encode($this->api->getData(getEnvi('schema') . '/master/asset?kendaraan_number=' . $this->input->get("asset_number"), null, false, $headers));
        } else {
            error_404();
        }
    }

    public function load()
    {
        // if ($this->input->post('scrty') == true && hasOwnProgram()) {
        //     $data['role'] = getSession('role');            
        //     $headers = array(
        //         'X-API-TOKEN:' . getEnvi('API_TOKEN'),
        //         'X-APP-KEY:' . getEnvi('API_APP_KEY'),
        //         'Authorization:' . getSession('token')
        //     );
        //     $start = $this->input->post("start");
        //     $limit = $this->input->post("limit");
        //     // echo base64_encode($this->api->getData(getEnvi('schema') . '/master/asset/list?start='. $start .'&limit=' . $limit, $data, false, $headers));
        // } else {
        //     error_404();
        // }

        // if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['role'] = getSession('role');            
            $headers = array(
                'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                'Authorization:' . getSession('token')
            );
            $start = $this->input->post("start");
            $limit = $this->input->post("limit");
            $keyword = str_replace(' ', '%20', $this->input->post("keyword"));

            // var_dump(getEnvi('schema') . '/master/asset/list?start='. $start .'&limit=' . $limit . "&keyword=" . $keyword);die;
            // $result = json_decode($this->api->getData(getEnvi('schema') . '/master/asset/list?start='. $start .'&limit=' . $limit . "&keyword=" . $keyword , $data, false, $headers));
            $result = $this->api->getData(getEnvi('schema') . '/master/vehicle/list?start='. $start .'&limit=' . $limit . "&keyword=" . $keyword , $data, false, $headers);
            // var_dump($result);die;
            echo base64_encode($result);
        // } else {
        //     error_404();
        // }
    }


    public function update_status()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['asset_number'] = $this->input->post('id');
            $data['status'] = $this->input->post('status');

            $this->api->set_headers(
                array(
                    'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                    'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                    'Authorization:' . getSession('token'),
                )
            );   
            $result = $this->api->put(getEnvi('schema') . '/master/asset/status', $data, true);
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('asset_status_success_header'),
                    'message' => getLangKey('asset_status_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('asset_status_failed_header'),
                    'message' => getLangKey('asset_status_failed_message')
                ]);
            }
        } else {
            error_404();
        }
    }

    public function delete()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['kd_kendaraan'] = $this->input->post('kd_kendaraan');            
            $result = $this->api->delete(getEnvi('schema') . '/master/vehicle', $data, true);
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('kendaraan_delete_success_header'),
                    'message' => getLangKey('kendaraan_delete_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('kendaraan_delete_failed_header'),
                    'message' => getLangKey('kendaraan_delete_failed_message')
                ]);
            }
        } else {
            error_404();
        }
    }
}



/* End of file Master_core.php */
/* Location: ./application/modules/Master/controllers/Master_core.php */