<div>
<div>
   <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
      <div>
         <img src="{{asset('images/files.svg')}}" alt="" class="w-full object-contain">
      </div>

      <div class="h-screen flex justify-center items-center">

         <form action="" class="w-[500px]">
            <div class="mb-4">
               <h1 class="text-2xl font-bold mb-4">Signup</h1>
               <p>Create My Files Cloud</p>
            </div>

            <div class="mb-3">
               <label for="name">Username</label>
               <input type="text" placeholder="Create Your username" class="input input-bordered w-full" />
            </div>

            <div class="mb-3">
               <label for="email">Email</label>
               <input type="text" placeholder="Enter new Email" class="input input-bordered w-full" />
            </div>

            <div class="mb-3">
               <label for="password">New Password</label>
               <input type="text" placeholder="Create Your Password" class="input input-bordered w-full" />
            </div>

            <div class="mb-3">
               <label for="conf-password">Confirm Password</label>
               <input type="text" placeholder="Rewrite Your Password" class="input input-bordered w-full" />
            </div>

            <div class="mb-3">
               <button class="btn btn-warning w-full">Create</button>
            </div>

            <div class="mb-3">
               <p class="text-center">---- OR ----- </p>
               <p class="text-center">Already have an account? <a href="/login" wire:navigate class="text-warning font-bold">login</a></p>
               

            </div>
         </form>
      </div>

   </div>
</div>
</div>
