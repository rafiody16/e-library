<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="text-center mb-4">Register</h2>

                    <form wire:submit.prevent="register">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input wire:model.defer="name" type="text" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your name">
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input wire:model.defer="email" type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email">
                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="role" class="form-label">Email</label>
                            <select wire:model.defer="id_role" id="id_role" class="form-select @error('id_role') is-invalid @enderror">
                                <option value="">Select Role</option>
                                @foreach($roles as $role)
                                    <option value="{{ $role->id_role }}">{{ $role->name_role }}</option>
                                @endforeach
                            </select>
                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input wire:model.defer="password" type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password">
                            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input wire:model.defer="password_confirmation" type="password" id="password_confirmation" class="form-control" placeholder="Repeat password">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Register</button>
                    </form>

                    <p class="mt-3 text-center">
                        Already have an account?
                        <a href="{{ route('login') }}" class="text-decoration-none">Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
