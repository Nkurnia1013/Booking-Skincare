<div class="block-quick-info-2">
    <div class="container">
        <div class="block-quick-info-2-inner shadow" style="margin-top: -350px">
            <div class="row">
                <div class="  col-12 mb-2">
                    <h5 class="text-dark ml-2 text-center mt-1 pt-1">Data Booking</h5>
                    <table width="100%" class="text-wrap mb-0 tb table table-borderless table-bordered table-striped table-hover ">
                        <thead class="">
                            <tr>
                                <th class="w-1">#</th>
                                <th>ID Booking</th>
                                <th>Tanggal</th>
                                <th>Perawatan</th>
                                <th>Status</th>
                                <th data-priority="1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['data'] as $v => $k): ?>
                            <tr>
                                <td><?php echo $v + 1; ?></td>
                                <td><?php echo $k->idbooking; ?></td>
                                <td>
                                    <?php echo date_format(date_create($k->tgl_booking), 'd/m/Y'); ?>
                                    <div>Oleh: <?php echo $k->nama; ?></div>
                                </td>
                                <td><?php echo $k->nama_perawatan; ?>
                                    <div class="">Rp.<?php echo number_format($k->harga); ?></div>
                                </td>
                                <td><?php echo $k->status; ?></td>
                                <td><a href="KBooking?key=<?php echo $k->idbooking; ?>" class="btn btn-sm btn-warning">Kelola</a></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>