<div>
    <div>
        

            <div class="h-screen flex justify-center items-center">

                <form action="" class="w-[500px]" wire:submit='register'>
                    <div class="mb-4">
                        <h1 class="text-2xl font-bold mb-4">Signup</h1>
                        <p>Create My Files Cloud</p>
                    </div>

                    <div class="mb-3">
                        <label for="username">Username</label>
                        <input type="text" wire:model="username" placeholder="Create Your username"
                            class="input input-bordered w-full" />

                        @error('username')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="text" wire:model="email" placeholder="Enter new Email"
                            class="input input-bordered w-full" />
                        @error('email')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password">New Password</label>
                        <input type="password" wire:model="password" placeholder="Create Your Password"
                            class="input input-bordered w-full" />
                        @error('password')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="conf_password">Confirm Password</label>
                        <input type="password" wire:model="password_confirmation" placeholder="Rewrite Your Password"
                            class="input input-bordered w-full" />
                        @error('password_confirmation')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <button class="btn btn-warning w-full" wire:model='submit'>Create</button>
                    </div>

                    <div class="mb-3">
                        <p class="text-center">---- OR ----- </p>
                        <p class="text-center">Already have an account? <a href="/login" wire:navigate
                                class="text-warning font-bold">login</a></p>


                    </div>
                </form>
            </div>
            
    </div>
</div>
