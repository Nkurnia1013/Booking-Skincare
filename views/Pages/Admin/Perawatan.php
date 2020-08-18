<div class="site-section block-services-1">
    <div class="container mt-4">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2 class="site-section-heading text-center font-secondary text-black text-white">Data Perawatan</h2>
            </div>
        </div>
        <div class="row">
            <div class=" col-4 mb-2">
                <div class="card rounded shadow" style="zoom:85%">
                    <h5 class="text-dark ml-2 text-center mt-1 pt-1">Form Perawatan</h5>
                    <div class=" card-body ">
                        <form action="Action.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <?php foreach ($data['form'] as $isi): ?>
                                <?php if ($isi['name'] == 'gambar'): ?>
                                <?php if (isset($Request->key)): ?>
                                <div class="form-grup col-12 mb-2 input-group-sm">
                                    <label class="form-control-label text-dark">Gambar</label>
                                    <input type="file" class="form-control" name="input[]">
                                    <small class="text-danger">Kosongkan Jika tidak ada perubahan</small>
                                </div>
                                <?php else: ?>
                                <div class="form-grup col-12 mb-2 input-group-sm">
                                    <label class="form-control-label text-dark">Gambar</label>
                                    <input type="file" class="form-control" required="" name="input[]">
                                </div>
                                <?php endif;?>
                                <?php else: ?>
                                <?php include $komponen . '/Input.php';?>
                                <?php endif;?>
                                <?php endforeach;?>
                                <div class="modal-footer mt-4 d-flex justify-content-center col-12  py-1">
                                    <input type="hidden" name="table" value="perawatan">
                                    <?php if (!isset($Request->key)): ?>
                                    <button type="submit" name="aksi" value="insert" class="btn btn-sm  btn-pink2">Tambah</button>
                                    <?php else: ?>
                                    <input type="hidden" name="link" value="<?php echo $hal; ?>">
                                    <input type="hidden" name="key" value="<?php echo $Request->key; ?>">
                                    <input type="hidden" name="primary" value="id_perawatan">
                                    <button type="submit" name="aksi" value="update" class="btn btn-sm  btn-info">Edit</button>
                                    <button type="submit" name="aksi" value="delete" class="btn btn-sm  btn-warning">Hapus</button>
                                    <?php endif;?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="  col-8 mb-2">
                <div class="card rounded shadow" style="zoom:85%">
                    <h5 class="text-dark ml-2 text-center mt-1 pt-1">Tabel Perawatan</h5>
                    <table width="100%" class="text-nowrap mb-0 tb table table-borderless table-striped table-hover ">
                        <thead class="">
                            <tr>
                                <th class="w-1">#</th>
                                <?php foreach ($data['form'] as $e): ?>
                                <?php if ($e['tb']): ?>
                                <th class="">
                                    <?php echo $e['label']; ?>
                                </th>
                                <?php endif;?>
                                <?php endforeach;?>
                                <th data-priority="1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['data'] as $v => $k): ?>
                            <tr class="">
                                <td>
                                    <?php echo $v + 1; ?>
                                </td>
                                <?php foreach ($data['form'] as $e1): ?>
                                <?php if ($e1['tb']): ?>
                                <td class="">
                                    <?php $b = $e1['name'];?>
                                    <?php if ($b == 'harga'): ?>
                                    Rp.
                                    <?php echo number_format($k->$b); ?>
                                    <?php elseif ($b == 'gambar'): ?>
                                    <img src="upload/<?php echo $k->$b; ?>" class="img-thumbnail">
                                    <?php else: ?>
                                    <?php echo $k->$b; ?>
                                    <?php endif;?>
                                </td>
                                <?php endif;?>
                                <?php endforeach;?>
                                <td class="text-right ">
                                    <a href="?key=<?php echo $k->id_perawatan; ?>" class="btn btn-warning btn-sm">kelola</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>