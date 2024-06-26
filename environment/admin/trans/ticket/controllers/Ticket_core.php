<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require 'vendor/autoload.php';
use Dompdf\Dompdf;

// use vendor\pdfcrowd\pdfcrowd\pdfcrowd;
// require "pdfcrowd.php";
require "pdfcrowd-5.20.0\pdfcrowd.php";
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

class Ticket_core extends CI_Controller
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
        $this->view['title']      = getLangKey('request');
        $this->view['content']    = 'trans/request/v_request';
        $this->view['css']    = [
            'css/bootstrap.min.css',
            'css/icons.min.css',
            'css/app.min.css',
            'css/custom.min.css',
            'css/global.css',
        ];
        $this->view['javascript'] = [
        ];

        $this->view['java'] = [
            'path' => 'trans',
            'file' => 'ticket'
        ];

        $this->load->template('trans/ticket/v_ticket', $this->view);   
        // loadTemplate('layout', $this->view);     
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
            echo $this->api->getData(getEnvi('schema') . '/trans/request_bus?id_request='.$id_request, null, false, $headers);
        // } else {
        //     error_404();
        // }
    }

    public function generateticketpdf(){
        $dompdf = new Dompdf();        
        $dompdf->setPaper('A5', 'landscape');      
        
        $id_request = $this->input->get('id_request');            
            
        $headers = array(
            'X-API-TOKEN:' . getEnvi('API_TOKEN'),
            'X-APP-KEY:' . getEnvi('API_APP_KEY'),
            'Authorization:' . getSession('token')
        );

        $data = json_decode($this->api->getData(getEnvi('schema') . '/trans/request_bus?id_request='.$id_request, null, false, $headers));        

        var_dump($data->data->passenger[1]);die;
        
        $this->view['data']     = $data->data;
        $this->view['title']    = getLangKey('request');
        $this->view['content']  = 'trans/request/v_request';
        $this->view['css']      = [
            'css/bootstrap.min.css',
            'css/icons.min.css',
            'css/app.min.css',
            'css/custom.min.css',
            'css/global.css',
        ];
        
        $this->view['java'] = [
            'path' => 'trans',
            'file' => 'ticket'
        ];
        $this->load->template('trans/ticket/v_ticket', $this->view);
        // $html = $this->load->template('trans/ticket/v_ticket', $this->view, true);
        // $dompdf->load_html($html);
        // $dompdf->render();
        // ob_end_clean(); 
        // $dompdf->stream("TIKET", array("Attachment" => false));
    }

    public function generateticket(){
        try
        {
            // create the API client instance
            $client = new \Pdfcrowd\HtmlToImageClient("demo", "ce544b6ea52a5621fb9d55f8b542d14d");

            // configure the conversion
            $client->setOutputFormat("png");

            // run the conversion and write the result to a file
            // $client->convertUrlToFile("https://5de2-36-91-222-114.ngrok-free.app/project/tapi-dashboard/trans/ticket", 'upload/image/'. date("ymdhis") . ".png");
            $client->convertStringToFile('<div class="container">
            <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="ticket-card">
                    <div class="ticket-header">
                        <h3 class="ticket-title">Tiket Bus</h3>
                    </div>
                    <div class="ticket-body">
                        <div class="ticket-info">
                            <p><strong>Nama Penumpang:</strong> John Doe</p>
                            <p><strong>No. Kursi:</strong> <span class="seat-number">12</span></p>
                            <p><strong>Trayek:</strong> Jakarta - Surabaya</p>
                            <p><strong>Tanggal Keberangkatan:</strong> 30 Juni 2024</p>
                            <p><strong>Waktu Keberangkatan:</strong> 08:00 WIB</p>
                        </div>
                        <div class="ticket-info">
                            <h5><strong>Detail Perjalanan:</strong></h5>
                            <p><strong>Armada:</strong> Bus Mega Jaya</p>
                            <p><strong>Gate:</strong> A3</p>
                            <p><strong>Terminal:</strong> Terminal Bus Jakarta</p>
                        </div>
                        <hr>
                        <div class="text-center">
                            <button class="btn btn-primary"><i class="fas fa-download"></i> Unduh Tiket</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>','upload/image/'. date("ymdhis") . ".png");
        }
        catch(\Pdfcrowd\Error $why)
        {
            error_log("Pdfcrowd Error: {$why}\n");
            throw $why;
        }

        
        
        // way 1
        // $your_text = "Helloooo Worldddd";

        // $IMG = imagecreate( 500, 500 );
        // $background = imagecolorallocate($IMG, 0,0,255);
        // $text_color = imagecolorallocate($IMG, 255,255,0); 
        // $line_color = imagecolorallocate($IMG, 128,255,0);
        // imagestring( $IMG, 10, 1, 25, $your_text,  $text_color );
        // imagesetthickness ( $IMG, 5 );
        // imageline( $IMG, 30, 45, 165, 45, $line_color );
        // header( "Content-type: image/png" );
        // imagepng($IMG, 'upload/image/'. date("ymdhis") . ".png");
        // exit;

        /// way 2
        // Membuat gambar baru dengan ukuran 400x200 piksel
        // $image = imagecreate(400, 200);

        // // Menentukan warna background (putih)
        // $background_color = imagecolorallocate($image, 255, 255, 255);

        // // Menentukan warna untuk garis dan teks (hitam)
        // $text_color = imagecolorallocate($image, 0, 0, 0);

        // // Menggambar garis tepi tiket
        // imageline($image, 0, 0, 399, 0, $text_color); // Garis atas
        // imageline($image, 0, 0, 0, 199, $text_color); // Garis kiri
        // imageline($image, 399, 0, 399, 199, $text_color); // Garis kanan
        // imageline($image, 0, 199, 399, 199, $text_color); // Garis bawah

        // // Menambahkan teks pada tiket
        // $text = "Tiket Masuk";
        // $font = 'arial.ttf'; // Ganti dengan path font Anda jika perlu
        // $font_size = 20;
        // $text_x = (imagesx($image) - strlen($text) * $font_size) / 2;
        // $text_y = (imagesy($image) - $font_size) / 2;
        // imagettftext($image, $font_size, 0, $text_x, $text_y, $text_color, $font, $text);

        // imagestring( $image, 10, 1, 25, $text,  $text_color );

        // // Menyimpan gambar sebagai file PNG
        // imagepng($image, 'upload/image/'. date("ymdhis") .'.png');

        // // Menampilkan gambar di browser
        // header('Content-Type: image/png');
        // imagepng($image);

        // // Membersihkan gambar dari memori
        // imagedestroy($image);
    }
}



/* End of file Master_core.php */
/* Location: ./application/modules/Master/controllers/Master_core.php */