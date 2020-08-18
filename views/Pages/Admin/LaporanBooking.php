<div class="block-quick-info-2">
    <div class="container">
        <div class="block-quick-info-2-inner shadow" style="margin-top: -350px">
            <div class="row">
                <?php include $komponen . "/Filter.php";?>
                <?php if (isset($Request->tgl)): ?>

                <div class="col-lg-12 col-12 mt-3">
                    <div class="" style="zoom:85%">
                        <div class="card-header card-header-primary">
                            <div class="d-flex  justify-content-between">
                                <h4 class="card-title ">Preview Laporan</h4>
                                <button type="button" class="btn btn-outline-dark btn-sm  " onclick="$('#print22').print();">Cetak</button>
                            </div>
                        </div>
                        <div class="" style="zoom:100%" id="print22">
                            <?php //include $komponen . '/Kop.php';;;;;;;;;;;;;;;;;?>
                            <div class="row ">
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <br>
                                    <h4 class="text-center"><b><u>  <?php echo $data['judul']; ?></u></b></h4>
                                      <br>
                                    <br>
                                    <br>
                                    <table style="width: 20%" class="table h5 table-borderless">
                                       <?php if ($Request->jenis == 'mingguan'): ?>
                                            <tr>
                                            <td class="py-1">Minggu ke</td>
                                            <td class="py-1">: <?php echo $Request->tgl[0]; ?></td>
                                        </tr>
                                       <?php endif;?>
                                       <?php if ($Request->jenis == 'bulanan' || $Request->jenis == 'mingguan'): ?>
                                            <tr>
                                            <td class="py-1">Bulan</td>
                                            <td class="py-1">: <?php echo app\Fungsi::$bulan[$Request->tgl[1]]; ?></td>
                                        </tr>
                                       <?php endif;?>
                                         <tr>
                                            <td class="py-1">Tahun</td>
                                            <td class="py-1">: <?php echo $Request->tgl[2]; ?></td>
                                        </tr>

                                    </table>
                                    <table width="100%" style="border: 2px " class=" text-wrap mb-0  table  table-bordered ">
                                        <thead class=" ">

                                            <tr>
                                                <th>No</th>
                                                <th>ID Perawatan</th>
                                                <th>ID Pelanggan</th>
                                                <th>Nama Pelanggan</th>
                                                <th>Tanggal Booking</th>
                                                <th>Nama Paket Perawatan</th>
                                                <th>Harga Perawatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data['booking'] as $b => $k2): ?>
                                            <tr>
                                                <td>
                                                    <?php echo $b + 1; ?>
                                                </td>
                                                <td>
                                                    <?php echo $k2->id_perawatan; ?>
                                                </td>
                                                  <td>
                                                    <?php echo $k2->idpengguna; ?>
                                                </td>
                                                 <td>
                                                    <?php echo $k2->nama; ?>
                                                </td>

                                                 <td>
                                                    <?php echo $k2->tgl_booking; ?>
                                                </td>
                                                <td>
                                                    <?php echo $k2->nama_perawatan; ?>
                                                </td>

                                                <td class="text-center">Rp.
                                                    <?php echo number_format($k2->harga); ?>
                                                </td>

                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-1">
                                </div>
                            </div>
                            <?php include $komponen . '/Ttd.php';?>
                        </div>
                    </div>
                </div>
            <?php endif;?>
            </div>
        </div>
    </div>
</div>