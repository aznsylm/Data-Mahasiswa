<div class="container py-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    
    <!-- Button trigger modal -->
    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambah" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Mahasiswa
            </button>
        </div>
    </div>

    <!-- Button Search -->
    <div class="row">
        <div class="col-lg-6">
            <form action="<?= BASEURL;?>/mahasiswa/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari mahasiswa..." name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari"> Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
            <?php foreach( $data['mhs'] as $mhs ) : ?>
                <ul class="list-group ">
                    <li class="list-group-item ">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge text-bg-danger float-end me-1" onclick="return confirm('Yakin ??')"> Hapus</a>          
                        <a href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mhs['id']; ?>" class="badge text-bg-warning float-end me-1 tampilUbah"  data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>" > Edit</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-info float-end me-1"> Detail</a>
                    </li><hr>
                </ul>
            <?php endforeach; ?>             
        </div>
    </div>

</div>

<!-- Modal Tambah-->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL;?>/mahasiswa/tambah" method="post">
            <input type="hidden" name="id" id="id">
            <div class="mb-3">
                <label for="nama" class="form-label"> nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="mb-3">
                <label for="nim" class="form-label"> nim</label>
                <input type="number" class="form-control" id="nim" name="nim">
            </div>
            
            <div class="form-grup mb-3">
                <label for="jurusan"> jurusan</label>
                <select class="form-select" id="jurusan" name="jurusan">
                    <option selected hidden></option>
                    <option value="sistem informasi" > Teknik Informatika</option>
                    <option value="teknik informatika"> Statistika</option>
                    <option value="teknik elektro"> Teknik Mesin</option>
                </select>
            </div>
            
            <div class="">
                <label for="instagram" class="form-label"> instagram</label>
                <input type="text" class="form-control" id="instagram" name="instagram">
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>