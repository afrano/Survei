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

    public function GetRekapdata($Tahun = '2017', $Cabang = 'PTK', $Channel = 'Apotek', $semester = 'S1') {
        $data = $this->db->query('select h.Q01 from data_outlet d, hasilsurvei h where d.tahun_survei = "' + $Tahun + '" and d.cabang_outlet like "' + $Cabang + '" and d.channel like "' + $Channel + '" and d.semester like "' + $semester + '"');
        return $data;
    }

    //ambil data tabel kategori
    public function GetKat($where = "") {
        $data = $this->db->query('select * from tb_kategori ' . $where);
        return $data;
    }

    public function GetMerk($where = "") {
        $data = $this->db->query('select * from tb_merk ' . $where);
        return $data;
    }

    //ambil data tabel produk
    public function GetProduk($where = "") {
        $data = $this->db->query('select * from tb_produk ' . $where);
        return $data;
    }

    public function GetTotProduk() {
        $data = $this->db->query('select * from tb_produk group by id_kat ');
        return $data;
    }

    public function GetDetailProduk($where = "") {
        return $this->db->query("select tb_merk.merk, tb_produk.*  from tb_produk inner join tb_merk on tb_merk.id_merk=tb_produk.id_merk $where;");
    }

    public function count_all() {
        return $this->db->count_all('tb_produk');
    }

    public function Getdatasurvei($where = "") {
        $data = $this->db->query(' SELECT p.*, q.nama_outlet, q.channel, c.id_cabang
                                FROM hasilsurvei p, outlet q, cabang c 
                                where q.id_outlet = p.id_outlet and q.id_cabang = c.id_cabang ' . $where);
        return $data;
    }

    public function GetDataOutlet() {
        $data = $this->db->query(' SELECT o.*,c.regional from outlet o, cabang c where o.id_cabang = c.id_cabang');
        return $data;
    }

    public function GetDataCabang() {
        $data = $this->db->query(' SELECT * from cabang');
        return $data;
    }

    public function GetSurveiOutlet() {
        $data = $this->db->query('SELECT s.*,h.*, o.* from sales s, hasilsurvei h, outlet o where s.id_sales = h.id_sales and h.id_outlet = o.id_outlet and status = 0');
        return $data;
    }

    public function GetDetailOutlet($where = "") {
        $data = $this->db->query(' SELECT o.*, c.*
                                FROM outlet o, cabang c ' . $where);
        return $data;
    }

    public function GetEdit($where = "") {
        $data = $this->db->query(' SELECT h.*, q.nama_outlet, q.channel,q.id_outlet, c.id_cabang, q.alamat,q.telpon,p.semester
                                FROM hasilsurvei h, outlet q, cabang c ' . $where);
        return $data;
    }

    public function GetProdukKatMerko($where = "") {
        $data = $this->db->query('SELECT p.*, q.kategori, c.merk
                                FROM tb_produk p
                                LEFT JOIN tb_kategori q
                                ON(p.id_kat = q.id_kat)
                                LEFT JOIN tb_merk c
                                ON(p.id_merk = c.id_merk)' . $where);
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

    function UpdateProduk($data) {
        $this->db->where('id_produk', $data['id_produk']);
        $this->db->update('tb_produk', $data);
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
