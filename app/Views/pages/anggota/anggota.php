<a href="?page=anggota&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px"><i class="fa fa-plus"></i> Tambah Data</a>

<a href="./laporan/laporan_anggota_excel.php" target="blank" class="btn btn-default" style="margin-bottom: 5px"><i class="fa fa-print"></i> Export to Excel</a>

<a href="./laporan/laporan_anggota_pdf.php" target="blank" class="btn btn-default" style="margin-bottom: 5px"><i class="fa fa-print"></i> Export to PDF</a>
<!-- Advanced Tables -->
<div class="panel panel-default">
    
    <div class="panel-heading">
       Data Anggota
   </div>
   <div class="panel-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>TTL</th>
                    <th>Jenis Kelamin</th>
                    <th>DEPARTEMEN</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>
                            <a href="?page=anggota&aksi=ubah&nim=" class="btn btn-info" >Ubah</a>
                            <a onclick="return confirm ('Anda yakin hapus data ini?')" href="?page=anggota&aksi=hapus&nim=" class="btn btn-danger" >Hapus</a>
                            
                        </td>
                    </tr>
                    
                

                

                
            </tbody>
        </div>
    </div>
