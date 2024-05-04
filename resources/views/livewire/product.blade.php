<div>
    <div class="container-fluid mt-5 py-3 text-dark">
        <h1 class="text-center mb-3">Product</h1>
        <p class="text-center mb-3 lead">Berbagai macam jenis product yang kami tawarkan.</p>
        <div class="row justify-content-center">
            @foreach ($product as $item)
                <div class="col-6 col-sm-3 mb-4">
                    <div class="card shadow fw-bold">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top"
                            alt="Fissure in Sandstone" />
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <small class="card-text">{{ $item->type }}</small>
                            <p class="card-text">Rp. {{ $item->price }}</p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                            <a href="#!" class="btn btn-dark w-100 btn-rounded" data-mdb-ripple-init><i
                                    class="fas fa-shopping-cart"></i> Order</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
