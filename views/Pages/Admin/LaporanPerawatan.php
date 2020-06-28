<div class="block-quick-info-2">
    <div class="container">
        <div class="block-quick-info-2-inner shadow">
            <div class="row">
                <?php include $komponen . "/Filter.php";?>
                <div class="col-lg-12 col-12 mt-3">
                    <div class="" style="zoom:85%">
                        <div class="card-header card-header-primary">
                            <div class="d-flex  justify-content-between">
                                <h4 class="card-title ">Preview Laporan</h4>
                                <button type="button" class="btn btn-outline-dark btn-sm  " onclick="$('#print22').print();">Catak</button>
                            </div>
                        </div>
                        <div class="" style="zoom:100%" id="print22">
                            <?php // include $komponen . '/Kop.php';;?>
                            <div class="row ">
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <br>
                                    <h4 class="text-center"><b><u><?php echo $data['judul']; ?></u></b></h4>
                                    <table width="100%" style="border: 2px " class=" text-wrap mb-0  table  table-bordered ">
                                        <thead class=" ">
                                            <tr class="text-center">
                                                <th style="vertical-align: middle;" rowspan="2" class="w-1">#</th>
                                                <th style="vertical-align: middle;" rowspan="2" class="w-1">ID Perawatan</th>
                                                <th style="vertical-align: middle;" rowspan="2" class="w-1">Nama Perawatan</th>
                                                <th style="vertical-align: middle;" rowspan="2" class="w-1">Jenis Perawatan</th>
                                                <th style="vertical-align: middle;" rowspan="2" class="w-1">Harga</th>
                                               <th colspan="4">Booking</th>
                                            </tr>
                                            <tr>
                                                <th>Pending</th>
                                                <th>Dibatalkan</th>
                                                <th>Selesai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>xxx</td>
                                                <td>xxx</td>
                                                <td>xxx</td>
                                                <td>Rp.xxx</td>
                                                <td>10</td>
                                                <td>5</td>
                                                <td>8</td>
                                            </tr>
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
            </div>
        </div>
    </div>
</div>