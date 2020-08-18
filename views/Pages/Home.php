<div class="block-quick-info-2">
            <div class="container">
                <div class="block-quick-info-2-inner">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
                            <div class="d-flex quick-info-2">
                                <span class="icon icon-home mr-3"></span>
                                <div class="text">
                                    <strong class="d-block heading">Kunjungin kami pada</strong>
                                    <span class="excerpt">Dumai Kota,Jl.Pangeran Hidayat No.142,Sukajadi,Dumai Tim,Kota Dumai,Riau 28826</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
                            <div class="d-flex quick-info-2">
                                <span class="icon icon-phone mr-3"></span>
                                <div class="text">
                                    <strong class="d-block heading">Hubungin kami sekarang</strong>
                                    <span class="excerpt"><a href="#">0823 83507705</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
                            <div class="d-flex quick-info-2">
                                <span class="icon icon-envelope mr-3"></span>
                                <div class="text">
                                    <strong class="d-block heading">Kirim kami pesan</strong>
                                    <span class="excerpt"><a href="#">FB: Tasqi Skin care Dumai</a></span>
                                    <span class="excerpt"><a href="#">IG: Tasqi_Skin_Care </a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
                            <div class="d-flex quick-info-2">
                                <span class="icon icon-clock-o mr-3"></span>
                                <div class="text">
                                    <strong class="d-block heading">Buka pada</strong>
                                    <span class="excerpt">Senin-Minggu 09:30 – 19:30</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-services-1 py-5">
            <div class="container ">
                <div class="row">
                    <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
                        <h3 class="mb-3">Apa yang kami tawarkan?</h3>
                        <p>Kami menawarkan beberapa jenis perawatan kulit</p>
                        <p><a href="Perawatan" class="d-inline-flex align-items-center block-service-1-more"><span>Lihat Semua Perawatan</span> <span class="icon-keyboard_arrow_right icon"></span></a></p>
                    </div>
                     <?php foreach ($data['data'] as $k): ?>

                    <div class="mb-4 mb-lg-0 col-sm-6 col-md-6 col-lg-3">
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
