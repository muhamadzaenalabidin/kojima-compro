<!-- header page -->
<section class="py-5 text-white mt-5" style="background: url('<?= base_url(); ?>assets/vendor/landingpage/image/bg-header.png') center/cover no-repeat;">
    <div class="container">
        <h2 class="fw-bold">Our Product</h2>
    </div>
</section>
<!-- end header page -->

<!-- image hotspot -->
<section class="py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="position-relative" style="max-width: 1000px; margin: auto;">
                    <!-- Gambar interior mobil -->
                    <img src="<?= base_url(); ?>assets/vendor/landingpage/image/cars.jpg" alt="Interior" class="img-fluid">

                    <!-- Hotspot 1 -->
                    <div class="hotspot" style="top: 15%; left: 53%;" data-bs-toggle="tooltip" title="Assist Grips">
                        <a href="#assistgrip"><i class="bi bi-circle-fill"></i></a>
                    </div>

                    <div class="hotspot" style="top: 41%; left: 43%;" data-bs-toggle="tooltip"
                        title="Inside Handle">
                        <a href="#handle"><i class="bi bi-circle-fill"></i></a>
                    </div>

                    <!-- Hotspot 2 -->
                    <div class="hotspot" style="top: 59%; left: 2%;" data-bs-toggle="tooltip" title="Registers">
                        <a href="#register"><i class="bi bi-circle-fill"></i></a>
                    </div>

                    <div class="hotspot" style="top: 68%; left: 10%;" data-bs-toggle="tooltip" title="Cup Holder">
                        <a href="#cupholder"><i class="bi bi-circle-fill"></i></a>
                    </div>

                    <!-- Hotspot 2 -->
                    <div class="hotspot" style="top: 67%; left: 30%;" data-bs-toggle="tooltip"
                        title="Upper Conslole">
                        <a href="#upperconsole"><i class="bi bi-circle-fill"></i></a>
                    </div>

                    <!-- Hotspot 3 -->
                    <div class="hotspot" style="top: 58%; left: 25%;" data-bs-toggle="tooltip"
                        title="Heater Control">
                        <a href="#heater"><i class="bi bi-circle-fill"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end image hotspor -->

<!-- product list -->
<section class="py-5 bg-light">
    <div class="container mb-5">
        <h2 class="text-center mb-5 fw-bold">Our Products</h2>
        <div class="row g-4">

            <!-- Product 1 -->
            <div class="col-12 col-md-4" id="assistgrip">
                <div class="card h-100 shadow-sm">
                    <img src="<?= base_url(); ?>assets/vendor/landingpage/image/part/assist_grip.jpg" class="card-img-top" alt="Assist grips" />
                    <div class="card-body">
                        <h5 class="card-title">Assist grips</h5>
                        <p class="card-text">People hold onto these grips when riding in vehicles and getting in and
                            out of them. The current trend is for these to be retractable so that they do not stand
                            out. Our molding technology has been highly evaluated by the Japan Society of Polymer
                            Processing (awarded the Japan Society of Polymer Processing “Aoki Katashi” Technical
                            Award).</p>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-12 col-md-4" id="handle">
                <div class="card h-100 shadow-sm">
                    <img src="<?= base_url(); ?>assets/vendor/landingpage/image/part/inside_handle.jpg" class="card-img-top" alt="Inside Handles" />
                    <div class="card-body">
                        <h5 class="card-title">Inside Handles</h5>
                        <p class="card-text">Products that open the vehicle door from the inside. Door lock is
                            operated by electric control with a switch, and the door opens and closes in one motion.
                            They are also equipped with a function that allows the door to be opened and closed
                            physically in the event that the electricity is down.</p>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-12 col-md-4" id="heater">
                <div class="card h-100 shadow-sm">
                    <img src="<?= base_url(); ?>assets/vendor/landingpage/image/part/heater.jpg" class="card-img-top" alt="Heater Control" />
                    <div class="card-body">
                        <h5 class="card-title">Heater Control</h5>
                        <p class="card-text">The heater control maintains a comfortable temperature in the cabin. We
                            develop the electronic circuits and produce the design, including the look of the
                            nighttime lighting. We produce two types: a digital heater control and electric
                            push-type heat control.</p>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="col-12 col-md-4" id="upperconsole">
                <div class="card h-100 shadow-sm">
                    <img src="<?= base_url(); ?>assets/vendor/landingpage/image/part/upper_console.jpg" class="card-img-top" alt="Upper Console" />
                    <div class="card-body">
                        <h5 class="card-title">Upper Console</h5>
                        <p class="card-text">By setting the layout of items we would want to keep within reach, such
                            as trays and cup holders, and adding decorative elements to suit the vehicle concept, we
                            are working to enhance the product appeal of vehicle interiors.</p>
                    </div>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="col-12 col-md-4" id="cupholder">
                <div class="card h-100 shadow-sm">
                    <img src="<?= base_url(); ?>assets/vendor/landingpage/image/part/cupholder.jpg" class="card-img-top" alt="Cup holders" />
                    <div class="card-body">
                        <h5 class="card-title">Cup holders</h5>
                        <p class="card-text">We produce a wide variety of cup holders, including push types. We
                            studied the shapes of plastic bottles around the world and developed a mechanism to keep
                            the bottles from falling over. Cup holders with illumination have appeared recently, and
                            we continue to develop these products to meet user needs.</p>
                    </div>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="col-12 col-md-4" id="register">
                <div class="card h-100 shadow-sm">
                    <img src="<?= base_url(); ?>assets/vendor/landingpage/image/part/register.jpg" class="card-img-top" alt="Registers" />
                    <div class="card-body">
                        <h5 class="card-title">Registers</h5>
                        <p class="card-text">Registers are important components used as the air duct covers inside
                            vehicles for controlling the cabin environment. We also produce swing registers with
                            fins that move automatically.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>