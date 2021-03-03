<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Internal extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
    * 		http://example.com/index.php/welcome/index
    *	- or -
    * Since this controller is set as the default controller in
    * config/routes.php, it's displayed at http://example.com/
    *
    * So any other public methods not prefixed with an underscore will
    * map to /index.php/welcome/<method_name>
    * @see https://codeigniter.com/user_guide/general/urls.html
    */
    public function __construct() {
      parent::__construct();

      // $this->load->model('search_model', 'search');
      // $this->load->model('Question_model');
      $this->load->helper('security');

      $this->load->model('QuestionIit_model');

      // if(!$this->session->userdata('auth_session')['STD_CODE'])
      // {
      //   $allowed = array('index','auth', 'check_auth', 'clear_auth', 'get_tumbon', 'get_postype', 'get_pos', 'get_leveledu', 'get_proname','form_view');
      //   if(!in_array($this->router->fetch_method(), $allowed))
      //   {
      //     redirect('Question/index');
      //   }
      // }
    }


    public function index()
    {

      $data['csrf'] = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
      );

      // $data['questions'] = $this->db->get('qn_pl_question')->result();
      // $data['round'] = $this->db->get_where('qn_pl_round',array('status'=>'Y'))->row();

      $this->load->view('internal/form', $data);

    }


    public function store()
    {

      $client_ip = get_client_ip();
      $data = array(
        'ans_i101' => $this->input->post('ans_i101'),
        'ans_i102' => $this->input->post('ans_i102'),
        'ans_i201' => $this->input->post('ans_i201'),
        'ans_i301' => $this->input->post('ans_i301'),
        'ans_i302' => $this->input->post('ans_i302'),
        'ans_i303' => $this->input->post('ans_i303'),
        'ans_i401' => $this->input->post('ans_i401'),
        'ans_i402' => $this->input->post('ans_i402'),
        'ans_i403' => $this->input->post('ans_i403'),
        'ans_i501' => $this->input->post('ans_i501'),
        'ans_i502' => $this->input->post('ans_i502'),
        'ans_i503' => $this->input->post('ans_i503'),
        'ans_i601' => $this->input->post('ans_i601'),
        'ans_i602' => $this->input->post('ans_i602'),
        'ans_i603' => $this->input->post('ans_i603'),
        'ans_i701' => $this->input->post('ans_i701'),
        'ans_i801' => $this->input->post('ans_i801'),
        'ans_i802' => $this->input->post('ans_i802'),
        'ans_i901' => $this->input->post('ans_i901'),
        'ans_i1001' => $this->input->post('ans_i1001'),
        'ans_i1101' => $this->input->post('ans_i1101'),
        'ans_i1102' => $this->input->post('ans_i1102'),
        'ans_i1201' => $this->input->post('ans_i1201'),
        'ans_i1202' => $this->input->post('ans_i1202'),
        'ans_i1203' => $this->input->post('ans_i1203'),
        'ans_i1301' => $this->input->post('ans_i1301'),
        'ans_i1401' => $this->input->post('ans_i1401'),
        'ans_i1501' => $this->input->post('ans_i1501'),
        'ans_i1601' => $this->input->post('ans_i1601'),
        'ans_i1701' => $this->input->post('ans_i1701'),
        'ans_i1801' => $this->input->post('ans_i1801'),
        'ans_i1802' => $this->input->post('ans_i1802'),
        'ans_i1803' => $this->input->post('ans_i1803'),
        'ans_i1901' => $this->input->post('ans_i1901'),
        'ans_i2001' => $this->input->post('ans_i2001'),
        'ans_i2101' => $this->input->post('ans_i2101'),
        'ans_i2201' => $this->input->post('ans_i2201'),
        'ans_i2301' => $this->input->post('ans_i2301'),
        'ans_i2401' => $this->input->post('ans_i2401'),
        'ans_i2501' => $this->input->post('ans_i2501'),
        'ans_i2601' => $this->input->post('ans_i2601'),
        'ans_i2602' => $this->input->post('ans_i2602'),
        'ans_i2701' => $this->input->post('ans_i2701'),
        'ans_i2801' => $this->input->post('ans_i2801'),
        'ans_i2802' => $this->input->post('ans_i2802'),
        'ans_i2803' => $this->input->post('ans_i2803'),
        'ans_i2901' => $this->input->post('ans_i2901'),
        'ans_i3001' => $this->input->post('ans_i3001'),
        'ans_i3002' => $this->input->post('ans_i3002'),
        'ans_i3003' => $this->input->post('ans_i3003'),
        'ans_i3004' => $this->input->post('ans_i3004'),
        'created_by_ip' => $client_ip
      );



      $res = $this->QuestionIit_model->save($data);

      if($res == '1'){
            $this->session->set_flashdata('question_store_response', 'บันทึกข้อมูลเรียบร้อย');
            redirect('internal/success');
      }

    }


    public function success()
    {
      $submit_message = $this->session->flashdata('question_store_response');
      if(isset($submit_message)){
        $action_messages = array(
          "TITLE_MSG" => $this->session->flashdata('question_store_round'),
          "ALERT_MSG" => $this->session->flashdata('question_store_response'),
          "ALERT_STATUS" => 'success',
        );
        $data['actions'] = $action_messages;
        $this->load->view('internal/success', $data);
      }else{
        redirect('internal/');
      }

    }


    public function dashboard()
    {
      $this->load->view('internal/dashboard');
    }

    public function dashboard_source()
    {

      $sql_avg = "SELECT
                      ROUND(AVG(val_i1),2) AS avg_i1,
                      ROUND(AVG(val_i2),2) AS avg_i2,
                      ROUND(AVG(val_i3),2) AS avg_i3,
                      ROUND(AVG(val_i4),2) AS avg_i4,
                      ROUND(AVG(val_i5),2) AS avg_i5,
                      ROUND(AVG(val_i6),2) AS avg_i6,
                      ROUND(AVG(val_i7),2) AS avg_i7,
                      ROUND(AVG(val_i8),2) AS avg_i8,
                      ROUND(AVG(val_i9),2) AS avg_i9,
                      ROUND(AVG(val_i10),2) AS avg_i10,
                      ROUND(AVG(val_i11),2) AS avg_i11,
                      ROUND(AVG(val_i12),2) AS avg_i12,
                      ROUND(AVG(val_i13),2) AS avg_i13,
                      ROUND(AVG(val_i14),2) AS avg_i14,
                      ROUND(AVG(val_i15),2) AS avg_i15,
                      ROUND(AVG(val_i16),2) AS avg_i16,
                      ROUND(AVG(val_i17),2) AS avg_i17,
                      ROUND(AVG(val_i18),2) AS avg_i18,
                      ROUND(AVG(val_i19),2) AS avg_i19,
                      ROUND(AVG(val_i20),2) AS avg_i20,
                      ROUND(AVG(val_i21),2) AS avg_i21,
                      ROUND(AVG(val_i22),2) AS avg_i22,
                      ROUND(AVG(val_i23),2) AS avg_i23,
                      ROUND(AVG(val_i24),2) AS avg_i24,
                      ROUND(AVG(val_i25),2) AS avg_i25,
                      ROUND(AVG(val_i26),2) AS avg_i26,
                      ROUND(AVG(val_i27),2) AS avg_i27,
                      ROUND(AVG(val_i28),2) AS avg_i28,
                      ROUND(AVG(val_i29),2) AS avg_i29,
                      ROUND(AVG(val_i30),2) AS avg_i30
                  FROM vw_iit_detail";

      $avg_result = $this->db->query($sql_avg)->result();
      header('Content-Type: application/json');
      echo json_encode($avg_result);
    }



}
