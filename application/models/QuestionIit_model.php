<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class QuestionIit_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function save($data) {
       $result = $this->db->insert('qn_iit_form', $data);
        // $id = $this->db->insert_id();
        // return (isset($id)) ? $id : FALSE;
        return (isset($result)) ? $result : FALSE;
    }

    function update($id, $data) {
        $this->db->where('id', $id);
        $result = $this->db->update('qn_iit_form', $data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function delete($id) {
        $this->db->where('id', $id);
        $result = $this->db->delete('qn_iit_form');
        if ($result) {
            return true;
        } else {
            return false;
        }
    }


}

