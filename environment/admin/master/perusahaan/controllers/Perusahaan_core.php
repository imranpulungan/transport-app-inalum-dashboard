<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Master Controller
 *
 * Nah jadi ini fungsinya buat dipanggil di class utamanya nanti
 * Kenapa sih kok ribet? sebenernya enggak
 * cuman buat kalo ada yang nyoba utak atik codingnya tapi gak tau konsepnya bisa setres
 *
 * @package		Perusahaan Core
 * @subpackage	Perusahaan Core
 * @author		Alimstudio
 * @link		http://alimstudio.com
 */

class Perusahaan_core extends CI_Controller
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
            $this->view['title']      = getLangKey('perusahaan');
            $this->view['content']    = 'master/perusahaan/v_perusahaan';
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
                'path' => 'master',
                'file' => 'perusahaan'
            ];

            loadTemplate('layout', $this->view);
        }
    }

    public function load()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            // $data['role'] = getSession('role');
            echo base64_encode($this->api->getData(getEnvi('schema') . '/master/seksi/perusahaan', false));
        } else {
            error_404();
        }
    }

    public function add()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['nama']           = $this->input->post('nama');
            // $data['alias']          = $this->input->post('nama');
            echo $this->api->post(getEnvi('schema') . '/master/seksi/perusahaan', $data, false, true);
        } else {
            error_404();
        }
    }

    public function edit()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['id_seksi']       = $this->input->post('id_perusahaan_edit');
            $data['nama']           = $this->input->post('nama_edit');
            $data['alias']          = $this->input->post('nama_edit');
            $result = $this->api->put(getEnvi('schema') . '/master/seksi', $data, true);
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('perusahaan_edit_success_header'),
                    'message' => getLangKey('perusahaan_edit_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('perusahaan_edit_failed_header'),
                    'message' => getLangKey('perusahaan_edit_failed_message')
                ]);
            }
        } else {
            error_404();
        }
    }

    public function delete()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['id_seksi'] = $this->input->post('id');
            $result = $this->api->delete(getEnvi('schema') . '/master/seksi', $data, true);
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('perusahaan_delete_success_header'),
                    'message' => getLangKey('perusahaan_delete_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('perusahaan_delete_failed_header'),
                    'message' => getLangKey('perusahaan_delete_failed_message')
                ]);
            }
        } else {
            error_404();
        }
    }
    /**
     * End
     * Module Perusahaan
     */
}



/* End of file Master_core.php */
/* Location: ./application/modules/Master/controllers/Master_core.php */