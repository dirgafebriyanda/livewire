<div>
    <section class="vh-100">
        <div class="container h-100 pt-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-sm-4">
                    <div class="card shadow mt-4" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-12 d-flex align-items-center">
                                <div class="card-body text-black">
                                    <form>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a class="text-reset" href="https://bskreatif.com/"><img
                                                    src="{{ asset('img/logo bskreatif.png') }}" height="20"
                                                    alt="" loading="lazy" /></a>
                                        </div>
                                        <h5 class="text-center fw-bold py-3">Register</h5>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="text" id="form2Example17"
                                                class="form-control form-control-lg" wire:model="name" />
                                            <label class="form-label" for="form2Example17">Full name</label>
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="email" id="form2Example17"
                                                class="form-control form-control-lg" wire:model="email" />
                                            <label class="form-label" for="form2Example17">Email address</label>
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="password" id="form2Example27"
                                                class="form-control form-control-lg" wire:model="password" />
                                            <label class="form-label" for="form2Example27">Password</label>
                                            @error('password')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-dark btn-lg btn-block btn-rounded" type="button"
                                                wire:click="register">Register</button>
                                        </div>

                                        <p class="text-center text-black">Sudah memiliki? <a wire:navigate
                                                href="/login" style="color: #19ff75;">Login
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
