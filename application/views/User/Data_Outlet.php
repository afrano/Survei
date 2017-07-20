<form role="form" action="<?php echo base_url(); ?>Survei/savedatasurvei" method="POST" enctype="multipart/form-data">
    <div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="">Tahun Survei</label>
                <input type="month" class="form-control" value="" id="" name="tahun_survei" placeholder="YYYY" required>
            </div>

            <div class="form-group">
                <label for="">Nama Outlet</label>
                <input type="text" class="form-control" value="" id="" name="nama_outlet" placeholder="Masukan Nama Outlet" required>                        
            </div>
            <div class="form-group">
                <label for="">Cabang</label> 
                <select name="cabang_outlet" class="form-control">
                    <option value="">Pilih Cabang</option>
                    <option value="Banda Aceh">Banda Aceh</option>
                    <option value="Bandung 2">Bandung 2</option>
                    <option value="Bandung">Bandung</option>
                    <option value="Bandar Lampung">Bandar Lampung</option>
                    <option value="Bogor">Bogor</option>
                    <option value="Bengkulu">Bengkulu</option>
                    <option value="Bekasi">Bekasi</option>
                    <option value="Banjarmasin">Banjarmasin</option>
                    <option value="BalikPapan">BalikPapan</option>
                    <option value="Batam">Batam</option>
                    <option value="Cirebon">Cirebon</option>
                    <option value="Denpasar">Denpasar</option>
                    <option value="Jambi">Jambi</option>
                    <option value="Jember">Jember</option>
                    <option value="Jakarta 1">Jakarta 1</option>
                    <option value="Jakarta 2">Jakarta 2</option>
                    <option value="Jakarta 3">Jakarta 3</option>
                    <option value="Jayapura">Jayapura</option>
                    <option value="Kediri">Kediri</option>
                    <option value="Kudus">Kudus</option>
                    <option value="Kupang">Kupang</option>
                    <option value="Lhokseumawe">Lhokseumawe</option>  
                    <option value="Medan">Medan</option>
                    <option value="Makasar">Makasar</option>
                    <option value="Malang">Malang</option>
                    <option value="Manado">Manado</option>
                    <option value="Mataram">Mataram</option>
                    <option value="Padang">Padang</option>
                    <option value="Pejaten">Pejaten</option>
                    <option value="Pekanbaru">Pekanbaru</option>
                    <option value="Pangkalpinang">Pangkalpinang</option>
                    <option value="Palembang">Palembang</option>
                    <option value="Palu">Palu</option>
                    <option value="Pematangsiantar">Pematangsiantar</option>
                    <option value="Pontianak">Pontianak</option>
                    <option value="Purwokerto">Purwokerto</option>
                    <option value="Surabaya 1">Surabaya 1</option>
                    <option value="Surabaya 2">Surabaya 2</option>
                    <option value="Sukabumi">Sukabumi</option>  
                    <option value="Solo">Solo</option>
                    <option value="Samarinda">Samarinda</option>
                    <option value="Semarang">Semarang</option>
                    <option value="Tegal">Tegal</option>
                    <option value="Tangerang">Tangerang</option>
                    <option value="Tasikmalaya">Tasikmalaya</option>
                    <option value="Yogyakarta">Yogyakarta</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Channel</label>
                <select name="channel" class="form-control">
                    <option value="">Pilih Channel</option>
                    <option value="Apotek">Apotek</option>
                    <option value="Rumah Sakit">Rumah Sakit</option>
                    <option value="Subdis">Subdis</option>
                    <option value="other">Other</option>
                </select> 
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="">Alamat </label>
                <input type="text" class="form-control" value="" id="" name="alamat_outlet" placeholder="Masukan Alamat Outlet" required>                        
            </div>
            <div class="form-group">
                <label for="">No Telpon</label>
                <input type="number" class="form-control" value="" id="" name="telpon_outlet" placeholder="Masukan No Telpon" required>                        
            </div>
            <div class="form-group">
                <label for="">Periode Kuesioner</label>
                <select name="semester" class="form-control">
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                </select> 
            </div>
        </div>
        <div class>
            <button type="submit" class="btn btn-primary btn-block btn-flat">Simpan</button>
        </div>      
    </div>
</form>