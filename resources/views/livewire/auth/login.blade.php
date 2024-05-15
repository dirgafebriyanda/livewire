<div>
    <section class="vh-100">
        <div class="container h-100 pt-4">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-sm-4">
                    <div class="card shadow mt-4" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-lg-12 d-flex align-items-center">
                                <div class="card-body text-black">
                                    <form>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a class="text-reset" href="https://bskreatif.com/"><img
                                                    src="{{ asset('img/logo bskreatif.png') }}" height="20"
                                                    alt="" loading="lazy" /></a>
                                        </div>
                                        <h5 class="text-center fw-bold py-3">Login</h5>
                                        @if (session()->has('error'))
                                            <div class="alert alert-danger">{{ session('error') }}</div>
                                        @endif
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input wire:model="email" type="email" id="form2Example17"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">Email address</label>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input wire:model="password" type="password" id="form2Example27"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-dark btn-lg btn-block btn-rounded" type="button"
                                                wire:click="login">Login</button>
                                        </div>

                                        <p class="text-center text-black">Belum memiliki akun? <a wire:navigate
                                                href="/register" style="color: #19ff75;">Register
                                            </a></p>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
