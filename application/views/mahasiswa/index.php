    <div class="container">
        <?php if($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mahasiswa <strong>Berhasil</strong> <?= $this->session->flashdata('flash');?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        <?php endif;?>

        <div class="row">
            <div class="col">

                <a href="<?= base_url('mahasiswa/tambah');?>" class="btn btn-primary mb-2">Tambah Data Mahasiswa</a>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <form action="" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari data Mahasiswa..." name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Cari</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>

                <h3>Daftar Mahasiswa</h3>
                <?php if(empty($mahasiswa)) : ?>
                    <div class="alert alert-danger" role="alert">
                    Data mahasiswa tidak ditemukan.
                    </div>
                <?php endif; ?>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NRP</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php $i = 1;?>
                    <?php foreach($mahasiswa as $mhs) : ?>
                        <tr>
                            <th scope="row"><?= $i++;?></th>
                            <td><?= $mhs['nama'];?></td>
                            <td><?= $mhs['nrp'];?></td>
                            <td><?= $mhs['jurusan'];?></td>
                            <td>
                            <a href="<?= base_url();?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-info">Detail</a>

                            <a href="<?= base_url();?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success">Ubah</a>

                            <a href="<?= base_url();?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger" onclick="return confirm('Apakah anda yakin akan menghapusnya ?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>