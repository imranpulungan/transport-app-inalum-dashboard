<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Izin_kerja
 *
 * Nah jadi ini fungsinya buat extend jenis dokumen core
 * Sebenernya udah jadi sih kemaren tapi ada masalah lagi, DAMAGESjadi gimanalah
 *
 * @package		Izin_kerja
 * @subpackage	Izin_kerja
 * @author		Alimstudio
 * @link		http://alimstudio.com
 */
require_once 'Ticket_core.php';

class Ticket extends Ticket_core
{

    public function __construct()
    {
        parent::__construct();
    }
}
