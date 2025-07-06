<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="text-center mb-4">Login</h2>

                    @if (session()->has('error'))
                        <p class="text-red-500">{{ session('error') }}</p>
                     @endif

                    <form wire:submit.prevent="login">
                        <div class="mb-3">
                            <label>Email</label>
                            <input wire:model.defer="email" type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input wire:model.defer="password" type="password" class="form-control">
                        </div>
                        <button class="btn btn-primary">Login</button>
                    </form>

                    <p class="mt-2 text-sm">Don't have an account? <a href="{{ route('register') }}" class="text-blue-500">Register</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

