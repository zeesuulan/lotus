<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->load->view('upload_temp');
    }

    public function getFile()
    {

        $level = $this->input->post('level');
        if ($level) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'xls|xlsx|csv';
            $config['max_size'] = '10000';
            $config['encrypt_name'] = true;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('filepath')) {
                echo $this->upload->display_errors();
            } else {
                $data = $this->upload->data();
                $filePath = $data['full_path'];
                $this->load->library("excel");

                $PHPExcel = new Excel();

                $PHPReader = new PHPExcel_Reader_Excel2007();

                if (!$PHPReader->canRead($filePath)) {
                    $PHPReader = new PHPExcel_Reader_Excel5();
                    if (!$PHPReader->canRead($filePath)) {
                        echo 'no Excel';
                        return;
                    }
                }

                $PHPExcel = $PHPReader->load($filePath);
                /**读取excel文件中的第一个工作表*/
                $currentSheet = $PHPExcel->getSheet(0);
                /**取得最大的列号*/
                $allColumn = $currentSheet->getHighestColumn();
                /**取得一共有多少行*/
                $allRow = $currentSheet->getHighestRow();
                // $allRow = 3;

                $allObj = [];
                $obj = [];
                for ($currentRow = 2; $currentRow <= $allRow; $currentRow++) {
                    /**从第A列开始输出*/
                    for ($currentColumn = 'A'; $currentColumn <= $allColumn; $currentColumn++) {
                        $cell = $currentSheet->getCellByColumnAndRow(ord($currentColumn) - 65, $currentRow);
                        $value = $cell->getFormattedValue();

                        $obj[] = $value;
                    }
                    $allObj[] = $obj;
                    $obj = [];
                }

                $this->load->view('template'.$level, array("data" => $allObj, "school" => $this->session->userdata("s_name")));
               	unlink($filePath);
            }
        }
    }
}
