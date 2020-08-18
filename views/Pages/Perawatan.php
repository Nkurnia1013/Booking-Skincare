<div class="site-section block-services-1">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2 class="site-section-heading text-center font-secondary text-black">Perawatan Yang Tersedia</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($data['data'] as $k): ?>
            <div class="mb-4 mb-lg-4 col-sm-6 col-md-6 col-lg-3">

                <div class="block-service-1-card">
                            <a href="TBooking?key=<?php echo $k->id_perawatan; ?>" class="thumbnail-link d-block mb-4"><img src="upload/<?php echo $k->gambar; ?>" alt="Image" class="img-fluid"></a>
                            <h3 class="block-service-1-heading"><a href="TBooking?key=<?php echo $k->id_perawatan; ?>"><?php echo $k->nama_perawatan; ?></a></h3>
                            <div class="block-service-1-excerpt">
                                <p><?php echo $k->desk; ?></p>
                            </div>
                            <p><a href="TBooking?key=<?php echo $k->id_perawatan; ?>" class="d-inline-flex align-items-center block-service-1-more"><span>Booking Perawatan</span> <span class="icon-keyboard_arrow_right icon"></span></a></p>
                        </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>