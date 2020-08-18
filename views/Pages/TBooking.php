<div class="block-quick-info-2">
    <div class="container">
        <div class="block-quick-info-2-inner shadow" style="margin-top: -350px">
            <div class="row">
                <div class="  col-12 mb-2">
                    <h5 class="text-dark ml-2 text-center mt-1 pt-1">Booking Perawatan</h5>
                    <form action="Action.php" method="post" enctype="multipart/form-data">
                        <div class=" card-body ">
                            <div class="row">
                                <div class="col-4 border-right border-danger">
                                    <h5 class="text-danger">Informasi Perawatan</h5>
                                    <div class="d-flex flex-column">
                                        <img src="upload/<?php echo $data['data']->gambar; ?>" alt="Image" class="img-fluid shadow rounded">
                                        <span class="px-2">
                                            <div class="card shadow bg-white info-per" style="">
                                                <table class="table  table-borderless">
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
                                <div class="col-4 border-left border-danger">
                                    <h5 class="text-danger">ID Booking</h5>
                                    <div class="row">
                                        <div class="form-grup col-12 mb-2 input-group-sm">
                                            <input name="input[]" required="" readonly="" value="<?php echo $data['id']; ?>" type="text" class="form-control">
                                            <input type="hidden" name="tb[]" value="idbooking">
                                        </div>
                                    </div>
                                    <h5 class="text-danger">Dibooking Oleh</h5>
                                    <table class="table  table-bordered">
                                        <?php foreach ($data['form2'] as $k): ?>
                                        <?php $b = $k['name'];?>
                                        <tr>
                                            <td class="py-2">
                                                <?php echo $k['label']; ?>
                                            </td>
                                            <td class="py-2">
                                                <?php echo $Session['admin']->$b; ?>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </table>
                                    <h5 class="text-danger">Pada Tanggal</h5>
                                    <div class="row">
                                        <div class="form-grup col-12 mb-2 input-group-sm">
                                            <input name="input[]" required="" value="<?php echo date('Y-m-d'); ?>" type="date" class="form-control">
                                            <input type="hidden" name="tb[]" value="tgl_booking">
                                            <input type="hidden" name="input[]" value="<?php echo $Session['admin']->idpengguna; ?>">
                                            <input type="hidden" name="tb[]" value="idpengguna">
                                            <input type="hidden" name="input[]" value="<?php echo $data['data']->id_perawatan; ?>">
                                            <input type="hidden" name="tb[]" value="id_perawatan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class=" text-right">
                            <input type="hidden" name="table" value="booking">
                            <input type="hidden" name="link" value="Booking">
                            <button type="submit" name="aksi" value="insert" class="btn btn-sm  btn-pink2">Booking</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>