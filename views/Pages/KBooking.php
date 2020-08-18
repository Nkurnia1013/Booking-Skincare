<div class="block-quick-info-2">
    <div class="container">
        <div class="block-quick-info-2-inner shadow" style="margin-top: -350px">
            <div class="row">
                <div class="  col-4 mb-2 border-right border-dark">
                    <h5 class="text-dark ml-2 text-center mt-1 pt-1">
                        <?php echo $data['judul']; ?>
                    </h5>
                    <div class="d-flex flex-column">
                        <img src="upload/<?php echo $data['data']->gambar; ?>" alt="Image" class="img-fluid shadow rounded">
                        <span class="px-2">
                            <div class="card shadow bg-white info-per" style="">
                                <table class="table  ">
                                    <?php foreach ($data['form'] as $k): ?>
                                    <?php $b = $k['name'];?>
                                    <tr>
                                        <td class="py-2">
                                            <?php echo $k['label']; ?>
                                        </td>
                                        <td class="py-2">
                                            <?php echo $data['data']->$b; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </table>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="col-8">
                   <?php if ($data['data']->status == 'Pending'): ?>
                        <div class="alert alert-warning" role="alert">
                        Booking masih dipending, silahkan upload bukit pembayaran
                    </div>
                   <?php endif;?>
                    <?php if ($data['data']->status == 'Dibatalkan'): ?>
                        <div class="alert alert-danger" role="alert">
                        Booking Sudah di Batalkan
                    </div>
                   <?php endif;?>
                   <?php if ($data['data']->status == 'Selesai'): ?>
                        <div class="alert alert-primary" role="alert">
                        Booking Sudah Selesai, Terima kasih :)
                    </div>
                   <?php endif;?>
                    <?php if ($data['data']->status == 'Valid'): ?>
                        <div class="alert alert-success" role="alert">
                        Bukit Trasfer Valid
                    </div>
                   <?php endif;?>
                   <?php if ($data['data']->status == 'Tidak Valid'): ?>
                        <div class="alert alert-danger" role="alert">
                        Bukit Trasfer tidak valid, Silahkan update bukti transfer
                    </div>
                   <?php endif;?>
                    <div class="alert bg-white alert-secondary text-right" role="alert">
                        <?php if ($Session['admin']->jenis == 'Admin'): ?>
                        <a href="Action.php?aksi=update&table=booking&input=Selesai&tb=status&primary=idbooking&key=<?php echo $data['data']->idbooking; ?>" class="btn btn-sm btn-outline-primary">Selesai</a>

                        <a href="Action.php?aksi=update&table=booking&input=Valid&tb=status&primary=idbooking&key=<?php echo $data['data']->idbooking; ?>" class="btn btn-sm btn-outline-success">Valid</a>
                        <a href="Action.php?aksi=update&table=booking&input=Tidak Valid&tb=status&primary=idbooking&key=<?php echo $data['data']->idbooking; ?>" class="btn btn-sm btn-outline-warning">Tidak Valid</a>
                        <?php endif;?>
                        <a href="Action.php?aksi=update&table=booking&input=Dibatalkan&tb=status&primary=idbooking&key=<?php echo $data['data']->idbooking; ?>" class="btn btn-sm btn-outline-danger">Batalkan</a>
                    </div>
                    <div class="row">
                        <div class="col-6 border-right border-dark">
                            <form action="Action.php" method="post" enctype="multipart/form-data">
                                <div class="card bg-white card-body">
                                    <div class="row">
                                        <div class="form-grup col-12 mb-2 input-group-sm">
                                            <label class="form-control-label">Nama Pengirim</label>
                                            <input <?php if (!is_null($data['bayar'])): ?> value="<?php echo $data['bayar']->pengirim; ?>"
                                            <?php endif;?> type="text" autocomplete="off" class="form-control" required="" name="input[]">
                                            <input type="hidden" name="tb[]" value="pengirim">
                                        </div>
                                        <div class="form-grup col-12 mb-2 input-group-sm">
                                            <label class="form-control-label">No Rekening</label>
                                            <input type="text" <?php if (!is_null($data['bayar'])): ?> value="<?php echo $data['bayar']->norek; ?>"
                                            <?php endif;?> autocomplete="off" class="form-control" required="" name="input[]">
                                            <input type="hidden" name="tb[]" value="norek">
                                        </div>
                                        <div class="form-grup col-12 mb-2 input-group-sm">
                                            <label class="form-control-label">Gambar</label>
                                            <input type="file" autocomplete="off" class="form-control" <?php if (is_null($data['bayar'])): ?> required=""
                                            <?php endif;?> name="input[]">
                                        </div>
                                        <?php if ($Session['admin']->jenis == 'Pelanggan'): ?>
                                        <div class="modal-footer mt-4 d-flex justify-content-center col-12  py-1">
                                            <input type="hidden" name="table" value="pembayaran">
                                            <input type="hidden" name="input[]" value="<?php echo $Request->key; ?>">
                                            <input type="hidden" name="tb[]" value="idbooking">
                                            <?php if (is_null($data['bayar'])): ?>
                                            <button type="submit" name="aksi" value="insert" class="btn btn-sm  btn-pink2">Simpan</button>
                                            <?php else: ?>
                                            <input type="hidden" name="key" value="<?php echo $Request->key; ?>">
                                            <input type="hidden" name="primary" value="idbooking">
                                            <button type="submit" name="aksi" value="update" class="btn btn-sm  btn-pink2">Simpan</button>
                                            <?php endif;?>
                                        </div>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-6 border-left border-dark">
                            <?php if (!is_null($data['bayar'])): ?>
                            <div class="d-flex flex-column">
                                <a target="_blank" href="upload/<?php echo $data['bayar']->gambar; ?>"><img src="upload/<?php echo $data['bayar']->gambar; ?>" class="img-fluid rounded shadow" alt="Responsive image"></a>
                                <span class="px-2">
                                    <div class="card shadow bg-white info-per py-2 px-4" style="">
                                        <p class="mb-0"><strong>
                                                <?php echo $data['bayar']->pengirim; ?></strong>
                                        </p>
                                        <div class="text-muted d-flex flex-column">
                                            <span>
                                                <?php echo $data['bayar']->norek; ?></span>
                                            <span class="text-right">
                                                <?php echo $data['bayar']->tgl; ?></span>
                                        </div>
                                    </div>
                                </span>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>