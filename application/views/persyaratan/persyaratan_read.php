<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Persyaratan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <?php
                $this->load->view('template/notifikasi')
                ?>
                <div class="card">
                    <div class="card-header">
                        <a href="<?= base_url('persyaratan/tambah') ?>" class="btn btn-sm btn-success float-right"><i class="fas fa-plus">Tambah Data</i></a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Persyaratan</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($persyaratan as $a): ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $a->nama_persyaratan ?></td>
                                        <td><?= $a->keterangan ?></td>
                                        <td>
                                            <a href="<?= base_url('persyaratan/ubah/' . $a->id) ?>" class="btn btn-sm btn-info">Ubah</a>
                                            <a href="<?= base_url('persyaratan/hapus/' . $a->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Ingin hapus data ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>