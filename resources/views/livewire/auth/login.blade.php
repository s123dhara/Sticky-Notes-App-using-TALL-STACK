<div>
  
   
      <div class="h-screen flex justify-center items-center">

         <form action="" class="w-[500px]" wire:submit='login'>

            <x-common.alert />

            <div class="my-2">
               <h1 class="text-2xl font-bold mb-4">Login</h1>
               <p>Welcome Back to My Files Cloud</p>
            </div>

            <div class="mb-2">
               <label for="email">Email</label>
               <input type="text" wire:model='email' placeholder="Enter your Email" class="input input-bordered w-full" />
            </div>

            <div class="mb-2">
               <label for="password">Password</label>
               <input type="password" wire:model='password' placeholder="Enter Your Password" class="input input-bordered w-full" />
            </div>

            <div class="mb-2">
               <button class="btn btn-warning w-full" wire:model='submit'>Submit</button>
            </div>

            <div class="mb-2">
               <p class="text-center">---- OR ----- </p>
               <p class="text-center">Don't have an account? <a href="{{ route('register') }}" wire:navigate class="text-warning font-bold">Register</a></p>
              

            </div>
         </form>
      </div>

   
</div>