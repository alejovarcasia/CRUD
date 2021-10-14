<?php

class Crud_model extends CI_Model
{

    public function get_entries($name = "")
    {
        if ($name != '')
        {
            $result = $this->db->query("SELECT * FROM crud WHERE name LIKE" . " " . "'%" . "$name" . "%'")->result();
            echo json_encode($result);exit;
		}
        else
        {
          
            $this->db->select('*');
		    $this->db->from('crud');
           return $this->db->get()->result();
        }        
        
    }

    public function insert_entry($data)
    {
        return $this->db->insert('crud', $data);
    }

    public function delete_entry($id)
    {
        return $this->db->delete('crud', array('id' => $id));
    }

    public function single_entry($id)
    {
        $this->db->select('*');
        $this->db->from('crud');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }

    public function update_entry($data)
    {
        return $this->db->update('crud', $data, array('id' => $data['id']));
    }

}