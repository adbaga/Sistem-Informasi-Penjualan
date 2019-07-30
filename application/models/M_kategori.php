<?php
class M_kategori extends CI_Model {

    public function tampil()
    {
        // code
        $query = $this->db->query("SELECT * FROM categories");
        return $query;
    }

    public function simpan($name, $status)
    {
        $query = $this->db->query("INSERT INTO categories(name, status) Value('$name', '$status')");
        return $query;
    }
    public function show($id)
    {
        $query = $this->db->query("SELECT * FROM categories WHERE id='$id'");
        return $query->row();
    }

    public function edit($id)
    {
        $query = $this->db->query("SELECT * FROM categories WHERE id='$id'");
        return $query->row();
    }

    public function update($table, $data, $id)
    {
        $query = $this->db->where('id', $id);
        $query = $this->db->update($table, $data);
        return $query;
    }

    
    public function destroy($table, $id)
    {
        $query = $this->db->where('id', $id);
        $query = $this->db->delete($table);
        return $query;
    }
}

//model for database