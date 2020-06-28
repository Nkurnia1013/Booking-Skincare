<div class="site-section block-services-1">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2 class="site-section-heading text-center font-secondary text-white"><?php echo $data['judul']; ?></h2>
            </div>
        </div>
        <div class="row">
            <div class=" col-4 mb-5">
                <div class="card rounded shadow" style="zoom:85%">
                    <h5 class="text-dark ml-2 text-center mt-1 pt-1">Form Input</h5>
                    <form action="Action.php" method="post" enctype="multipart/form-data">
                        <div class=" card-body ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <?php foreach ($data['user.form'] as $isi): ?>
                                        <?php if ($isi['name'] == 'jk'): ?>
                                        <div class="form-grup col-4 mb-2 input-group-sm">
                                            <label class="form-control-label">Jenis Kelamin</label>
                                            <select class="form-control multi" name="input[]">
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            <input type="hidden" name="tb[]" value="jk">
                                        </div>
                                        <?php else: ?>
                                        <?php include $komponen . '/Input.php';?>
                                        <?php endif;?>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <?php foreach ($data['user.form2'] as $isi): ?>
                                        <?php if ($isi['name'] == 'jk'): ?>
                                        <?php else: ?>
                                        <?php include $komponen . '/Input.php';?>
                                        <?php endif;?>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <input type="hidden" name="table" value="pengguna">
                                    <?php if (!isset($Request->key)): ?>
                                    <button type="submit" name="aksi" value="insert" class="btn btn-sm  btn-pink2">Tambah</button>
                                    <?php else: ?>
                                    <input type="hidden" name="link" value="index.php?hal=PaketTambahan">
                                    <input type="hidden" name="key" value="<?php echo $Request->key; ?>">
                                    <input type="hidden" name="primary" value="idpt">
                                    <button type="submit" name="aksi" value="update" class="btn btn-sm  btn-info">Edit</button>
                                    <button type="submit" name="aksi" value="delete" class="btn btn-sm  btn-warning">Hapus</button>
                                    <?php endif;?>
                        </div>
                    </form>
                </div>
            </div>
            <div class="  col-8 mb-5">
                <div class="card rounded shadow" style="zoom:85%">
                    <h5 class="text-dark ml-2 text-center mt-1 pt-1">Tabel Data</h5>
                    <table width="100%" class="text-wrap mb-0 tb table table-borderless table-striped table-hover ">
                        <thead class="">
                            <tr>
                                <th class="w-1">#</th>
                                <?php foreach ($data['user.form'] as $e): ?>
                                <?php if ($e['tb']): ?>
                                <th class="">
                                    <?php echo $e['label']; ?>
                                </th>
                                <?php endif;?>
                                <?php endforeach;?>
                                <?php foreach ($data['user.form2'] as $e): ?>
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
                            <tr>
                                <td>
                                    <?php echo $v + 1; ?>
                                </td>
                                <?php foreach ($data['user.form'] as $e1): ?>
                                <?php if ($e1['tb']): ?>
                                <td class="text-wrap">
                                    <?php $b = $e1['name'];?>
                                    <?php if ($b == 'harga'): ?>
                                    Rp.
                                    <?php echo number_format($k->$b); ?>
                                    <?php else: ?>
                                    <?php echo $k->$b; ?>
                                    <?php endif;?>
                                </td>
                                <?php endif;?>
                                <?php endforeach;?>
                                <?php foreach ($data['user.form2'] as $e1): ?>
                                <?php if ($e1['tb']): ?>
                                <td class="text-wrap">
                                    <?php $b = $e1['name'];?>
                                    <?php if ($b == 'harga'): ?>
                                    Rp.
                                    <?php echo number_format($k->$b); ?>
                                    <?php else: ?>
                                    <?php echo $k->$b; ?>
                                    <?php endif;?>
                                </td>
                                <?php endif;?>
                                <?php endforeach;?>
                                <td class="text-right ">
                                    <a href="?hal=PaketTambahan&key=<?php echo $k->idpt; ?>" class="btn btn-warning btn-sm">kelola Paket</a>
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