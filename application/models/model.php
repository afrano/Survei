<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model extends CI_Model {

    public $variable;

    public function __construct() {
        parent::__construct();
    }

    //ambil data user
    function GetUser($data) {
        $query = $this->db->get_where('login', $data);
        return $query;
    }

    // ambil pertanyaan dari database
    public function GetPertanyaan() {
        $data = $this->db->query('SELECT * FROM `kuesioner` WHERE id_pertanyaan = "Q01"');
        return $data;
    }

    public function GetHitungOutlet() {
        $data = $this->db->query('select d.channel, count(*) as jumlah from data_outlet d, hasilsurvei h where h.id_outlet = d.id_outlet and d.tahun_survei = "2017" and Semester = "S1"');
        return $data;
    }

    public function GetRekap() {
        $data = $this->db->query('SELECT Q01 as range_nilainya, COUNT(*) AS jumlah FROM hasilsurvei where Q01=1');
        return $data;
    }

    public function GetHitungPemilih() {
        $data = $this->db->query('SELECT q01 as data, count(case when q01 = 1 then 1 else case when q01 = 2 then 1 else case when q01 = 3 then 1 else case when q01 = 4 then 1 else null end end end end) as q01 FROM hasilsurvei group by q01');
        return $data;
    }

    public function GetRekapdata($Tahun = '2017', $Cabang = 'PTK', $Channel = 'Apotek', $semester = 'S1') {
        $data = $this->db->query('select h.Q01 from data_outlet d, hasilsurvei h where d.tahun_survei = "' + $Tahun + '" and d.cabang_outlet like "' + $Cabang + '" and d.channel like "' + $Channel + '" and d.semester like "' + $semester + '"');
        return $data;
    }

    public function GetTotProduk() {
        $data = $this->db->query('select * from hasilsurvei group by id_hasil ');
        return $data;
    }

    public function count_all() {
        return $this->db->count_all('hasilsurvei');
    }

    public function GetDataOutlet() {
        $data = $this->db->query(' SELECT o.*,c.regional from outlet o, cabang c where o.id_cabang = c.id_cabang');
        return $data;
    }

    public function GetDataCabang() {
        $data = $this->db->query(' SELECT * from cabang');
        return $data;
    }

// masukan and ke where
    public function GetSurveiOutlet($where) {
        $data = $this->db->query('SELECT s.*,h.*, o.*, c.* from sales s, hasilsurvei h, outlet o, cabang c where s.id_sales = h.id_sales and h.id_outlet = o.id_outlet and status = 0 and c.id_cabang = o.id_cabang and o.id_cabang = "' . $where . '" ');
        return $data;
    }

    public function GetTerverifikasi($where) {
        $data = $this->db->query('SELECT s.*,h.*, o.*, c.* from sales s, hasilsurvei h, outlet o, cabang c where s.id_sales = h.id_sales and h.id_outlet = o.id_outlet and status = 1 and c.id_cabang = o.id_cabang and o.id_cabang = "' . $where . '" ');
        return $data;
    }

    public function GetHasilNasional() {
        $data = $this->db->query('SELECT s.*,h.*, o.* from sales s, hasilsurvei h, outlet o where s.id_sales = h.id_sales and h.id_outlet = o.id_outlet and status = 1 ');
        return $data;
    }

    public function Export($semester, $tahun) {
        $data = $this->db->query('SELECT s.*,h.*, o.* from sales s, hasilsurvei h, outlet o where s.id_sales = h.id_sales and h.id_outlet = o.id_outlet and status = 1 and h.semester = "' . $semester . '" and h.tahun = "' . $tahun . '"');
        return $data;
    }

    public function ExportCabang($ID, $semester, $tahun) {
        $data = $this->db->query('SELECT s.*,h.*, o.*, c.* from sales s, hasilsurvei h, outlet o, cabang c where s.id_sales = h.id_sales and h.id_outlet = o.id_outlet and status = 1 and c.id_cabang = o.id_cabang and o.id_cabang = "' . $ID . '" and h.semester = "' . $semester . '" and h.tahun = "' . $tahun . '"');
        return $data;
    }

    public function GetDetailOutlet($where = "") {
        $data = $this->db->query(' SELECT o.*, c.*
                                FROM outlet o, cabang c ' . $where);
        return $data;
    }

    public function GetDetail($where = "") {
        $data = $this->db->query(' SELECT h.*, q.*, c.*, s.*
                                FROM hasilsurvei h, outlet q, cabang c, sales s ' . $where . 'and h.id_sales = s.id_sales');
        return $data;
    }

    public function Simpan($table, $data) {
        return $this->db->insert($table, $data);
    }

    public function Update($table, $data, $where) {
        return $this->db->update($table, $data, $where);
    }

    public function Hapus($table, $where) {
        return $this->db->delete($table, $where);
    }

    function Updatedata($data) {
        $this->db->where('id_hasil', $data['id_hasil']);
        $this->db->update('hasilsurvei', $data);
    }

    function UpdateOutlet($data) {
        $this->db->where('id_outlet', $data['id_outlet']);
        $this->db->update('outlet', $data);
    }

    function UpdateCabang($data) {
        $this->db->where('id_outlet', $data['id_outlet']);
        $this->db->update('cabang', $data);
    }

    function GetVisitor($where = "") {
        return $this->db->query("select * from tb_visitor $where");
    }

    function GetProductView() {
        return $this->db->query("select sum(counter) as totalview from tb_produk where status = 'publish'");
    }

    //batas query pengunjung

    public function GetKate($where = "") {
        $data = $this->db->query('select count(*) as totalkategori from tb_kategori ' . $where);
        return $data;
    }

    function TotalKat() {
        return $this->db->query("select count(*) as totalkategori from tb_produk group by id_kat; ");
    }

}
