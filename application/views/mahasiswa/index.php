    <div class="container">
        <?php if($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mahasiswa<strong>Berhasil</strong> <?= $this->session->flashdata('flash');?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        <?php endif;?>

        <div class="row">
            <div class="col">
                <h3>Daftar Mahasiswa</h3>
                <a href="<?= base_url('mahasiswa/tambah');?>" class="btn btn-primary mb-2">Tambah Data Mahasiswa</a>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NRP</th>
                            <th scope="col">E-mail</th>
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
                            <td><?= $mhs['email'];?></td>
                            <td><?= $mhs['jurusan'];?></td>
                            <td>
                            <a href="" class="badge badge-success">Ubah</a>
                            <a href="" class="badge badge-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>