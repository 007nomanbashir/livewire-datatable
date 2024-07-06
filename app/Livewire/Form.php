<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;

class Form extends Component
{
    public $name;

    #[Rule('required|email')]
    public $email;

    public $password;
    public function createForm()
    {
        // $this->validate([

        //     'email' => 'required',

        // ]);
        $this->validate();
        \DB::table('news_latters')->insert([
            'email' => $this->email,
            // 'name' => $this->name,
            // 'password' => $this->password,
        ]);
        dump('success');
    }
    public function render(
    ) {
        return view('livewire.form');
    }
}
