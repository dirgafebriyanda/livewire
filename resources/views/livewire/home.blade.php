<div>
    <!-- Carousel wrapper -->
    <div id="carouselDarkVariant" class="carousel slide carousel-fade carousel-dark mt-5" data-mdb-ride="carousel"
        data-mdb-carousel-init>
        <!-- Indicators -->
        {{-- <div class="carousel-indicators">
            <button data-mdb-target="#carouselDarkVariant" data-mdb-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button data-mdb-target="#carouselDarkVariant" data-mdb-slide-to="1" aria-label="Slide 1"></button>
            <button data-mdb-target="#carouselDarkVariant" data-mdb-slide-to="2" aria-label="Slide 1"></button>
        </div> --}}

        <!-- Inner -->
        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
                <img style="height: 100vh;" src="{{ asset('img/Banner-ITFE-1920x748-hd.jpg') }}" class="d-block w-100"
                    alt="Motorbike Smoke" />
                {{-- <div class="carousel-caption">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div> --}}
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img style="height: 100vh;" src="{{ asset('img/Banner-ITFE-1920x748-hd.jpg') }}" class="d-block w-100"
                    alt="Mountaintop" />
                {{-- <div class="carousel-caption">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div> --}}
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img style="height: 100vh;" src="{{ asset('img/home-banner-xev-1920x748.jpeg') }}" class="d-block w-100"
                    alt="Woman Reading a Book" />
                {{-- <div class="carousel-caption">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div> --}}
            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselDarkVariant"
            data-mdb-slide="prev" title="Prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselDarkVariant"
            data-mdb-slide="next" title="Next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel wrapper -->

    {{-- Product --}}
    <div class="container-fluid py-5 text-dark">
        <h1 class="text-center fw-bold">Produk Kualitas No. 1</h1>
        <h3 class="text-center mb-5 lead">Kami berkomitmen akan selalu meberikan produk yang berkualitas dan terbaik
            untuk pelanggan kami</h3>
        <div class="row justify-content-center">
            @foreach ($product as $item)
                @if ($item->status == 1)
                    <div class="col-6 col-sm-3 mb-4">
                        <div class="card fw-bold">
                            <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top"
                                alt="Fissure in Sandstone" />
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <h6 class="card-text">Jenis : {{ $item->type }}<h6>
                                        <h6 class="card-text">Harga : Rp. {{ $item->price }}<h6>
                                                <h6 class="card-text">Spesifikasi : {{ $item->description }}<h6>
                                                        <div class="row">
                                                            <div class="col-sm-6 mb-2 g-0">
                                                                <a href="#!"
                                                                    class="btn btn-dark btn-block btn-rounded"
                                                                    data-mdb-ripple-init><i class="fas fa-eye"></i>
                                                                    Detail
                                                                </a>
                                                            </div>
                                                            <div class="col-sm-6 g-0">
                                                                <a href="#!"
                                                                    class="btn btn-success btn-block btn-rounded"
                                                                    data-mdb-ripple-init><i
                                                                        class="fas fa-cart-plus"></i>
                                                                    Beli
                                                                </a>
                                                            </div>
                                                        </div>

                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="d-flex justify-content-center pb-5">
            <a wire:navigate href="{{ route('product') }}" class="btn btn-dark btn-rounded" data-mdb-ripple-init>
                Lihat Produk Lainnya <i class="fas fa-arrow-right me-2"></i>
            </a>
        </div>

    </div>
    {{-- Product --}}

    {{-- Quality --}}
    <div class="container-fluid py-5 text-center">
        <h1 class="fw-bold">Alasan Anda Kenapa Harus Memilih Kami ?</h1>
        <h3 class="text-center mb-5 lead">Saatnya Anda menikmati beragam kelebihan saat membeli perlengkapan mahar &
            hantaran di BSKreatif</h3>
        <div class="row justify-content-center">
            <div class="col-6 col-sm-3  mb-4 ">
                <div class="card fw-bold" style="height: 10rem">
                    <div class="card-body text-center">
                        <i class="fas fa-users fa-3x mb-3"></i>
                        <h5 class="card-title">Tim Profesional</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-3  mb-4 ">
                <div class="card fw-bold" style="height: 10rem">
                    <div class="card-body text-center">
                        <i class="fas fa-cogs fa-3x mb-3"></i>
                        <h5 class="card-title">Teknologi Terkini</h5>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-3 mb-4 ">
                <div class="card fw-bold" style="height: 10rem">
                    <div class="card-body text-center">
                        <i class="fas fa-handshake fa-3x mb-3"></i>
                        <h5 class="card-title">Pelayanan Pelanggan</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-3 mb-4 ">
                <div class="card fw-bold" style="height: 10rem">
                    <div class="card-body text-center">
                        <i class="fas fa-dollar-sign fa-3x mb-3"></i>
                        <h5 class="card-title">Harga Kompetitif</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-6 col-sm-3 mb-4">
                <div class="card fw-bold" style="height: 10rem">
                    <div class="card-body text-center">
                        <i class="fas fa-chart-line fa-3x mb-3"></i>
                        <h5 class="card-title">Pertumbuhan Bisnis</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-3 mb-4">
                <div class="card fw-bold" style="height: 10rem">
                    <div class="card-body text-center">
                        <i class="fas fa-lock fa-3x mb-3"></i>
                        <h5 class="card-title">Aman dan Terpercaya</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-3 mb-4">
                <div class="card fw-bold" style="height: 10rem">
                    <div class="card-body text-center">
                        <i class="fas fa-thumbs-up fa-3x mb-3"></i>
                        <h5 class="card-title">Reputasi Terpercaya</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-3 mb-4">
                <div class="card fw-bold" style="height: 10rem">
                    <div class="card-body text-center">
                        <i class="fas fa-heart fa-3x mb-3"></i>
                        <h5 class="card-title">Komitmen Terhadap Kualitas</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- Quality --}}

    {{-- Package --}}
    <div class="container-fluid py-5 text-dark">
        <h1 class="text-center fw-bold">Paket Terbaik Dengan Bonus Melimpah</h1>
        <h3 class="text-center mb-5 lead">Kami meberikan banyak bonus untuk anda secara gratis <br>Pilih paket sesuai
            kebutuhan anda!!</h3>
        <div class="row justify-content-center">
            @foreach ($product as $item)
                @if ($item->status == 1)
                    <div class="col-6 col-sm-3 mb-4">
                        <div class="card fw-bold">
                            <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top"
                                alt="Fissure in Sandstone" />
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <h6 class="card-text">Jenis : {{ $item->type }}<h6>
                                        <h6 class="card-text">Harga : Rp. {{ $item->price }}<h6>
                                                <h6 class="card-text">Spesifikasi : {{ $item->description }}<h6>
                                                        <div class="row">
                                                            <div class="col-sm-6 mb-2 g-0">
                                                                <a href="#!"
                                                                    class="btn btn-dark btn-block btn-rounded"
                                                                    data-mdb-ripple-init><i class="fas fa-eye"></i>
                                                                    Detail
                                                                </a>
                                                            </div>
                                                            <div class="col-sm-6 g-0">
                                                                <a href="#!"
                                                                    class="btn btn-success btn-block btn-rounded"
                                                                    data-mdb-ripple-init><i
                                                                        class="fas fa-cart-plus"></i>
                                                                    Beli
                                                                </a>
                                                            </div>
                                                        </div>

                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="d-flex justify-content-center pb-5">
            <a wire:navigate href="{{ route('product') }}" class="btn btn-dark btn-rounded" data-mdb-ripple-init>
                Lihat Paket Lainnya <i class="fas fa-arrow-right me-2"></i>
            </a>
        </div>

    </div>
    {{-- Package --}}

    {{-- Software --}}
    <div class="container-fluid py-5 text-center text-dark">
        <h1 class="fw-bold">Teknologi Terkini</h1>
        <p class="mb-3 lead">Kami manggunakan berbagai Apikasi & Mesin untuk menghasilkan sebuah karya</p>
        <div class="row justify-content-center py-3">
            <p class="lead fw-bold">Apikasi</p>
            <div class="col-6 mt-2 col-sm-3">
                <img class="img-fluid  img-thumbnail" src="{{ asset('img/ilustrator-logo.png') }}"
                    alt="ilustrator-logo" style="width: 15rem">
            </div>
            <div class="col-6 mt-2 col-sm-3">
                <img class="img-fluid  img-thumbnail" src="{{ asset('img/rdwork-logo.png') }}" alt="effects-logo"
                    style="width: 15rem">
            </div>
            <div class="col-6 mt-2 col-sm-3">
                <img class="img-fluid  img-thumbnail" src="{{ asset('img/corel-logo.png') }}" alt="corel-logo"
                    style="width: 15rem">
            </div>
            <div class="col-6 mt-2 col-sm-3">
                <img class="img-fluid  img-thumbnail" src="{{ asset('img/photoshop-logo.png') }}"
                    alt="photoshop-logo" style="width: 15rem">
            </div>
        </div>
        <div class="row justify-content-center py-3">
            <p class="lead fw-bold">Mesin</p>
            <div class="col-6 mt-2 col-sm-3">
                <img class="img-fluid  img-thumbnail" src="{{ asset('img/mesin-grafir-akrilik.jpg') }}"
                    alt="ilustrator-logo" style="width: 15rem">
            </div>
            <div class="col-6 mt-2 col-sm-3">
                <img class="img-fluid  img-thumbnail" src="{{ asset('img/mesin-penekuk-akrilik.png') }}"
                    alt="effects-logo" style="width: 15rem">
            </div>
            <div class="col-6 mt-2 col-sm-3">
                <img class="img-fluid  img-thumbnail" src="{{ asset('img/mesin-cuting-akrilik.jpg') }}"
                    alt="corel-logo" style="width: 15rem">
            </div>
            <div class="col-6 mt-2 col-sm-3">
                <img class="img-fluid  img-thumbnail" src="{{ asset('img/mesin-potong-fiber.jpg') }}"
                    alt="photoshop-logo" style="width: 15rem">
            </div>
        </div>
    </div>
    {{-- Software --}}

    {{-- Customer --}}
    <div class="container-fluid py-5 text-center text-dark">
        <h1 class="fw-bold">Apa kata mereka yang telah berlangganan?</h1>
        <div class="row justify-content-center">
            <div class="col-4 col-sm-2 pt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title fw-bold">Lorem ipsum dolor sit.</div>
                        <card class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quam
                            dolores in debitis consequatur consequuntur illo optio.!</card>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Customer --}}
</div>
