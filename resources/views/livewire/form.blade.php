<div>
    <h1> This is livewire form</h1>
    <form wire:submit="createForm" action="">
        <input wire:model="name" type="text" placeholder="name"><br><br>
        @error('name')
            <div class="text-red-500">
                {{ $message }}
            </div>
        @enderror
        <input wire:model="email" type="email" placeholder="email"><br><br>
        @error('email')
            <div class="text-red-500">
                {{ $message }}
            </div>
        @enderror
        <input wire:model="password" type="password" placeholder="password"><br><br>
        @error('password')
            <div class="text-red-500">
                {{ $message }}
            </div>
        @enderror

        <button class="px-3 py-1 bg-blue-500 text-white rounded">Create</button>

    </form>
</div>
