<?php

namespace App\Livewire;

use Livewire\Component;
use DB;
use Livewire\WithPagination;

class NewsletterTable extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 5;

    public function handleClick()
    {
        dump('clicked');

    }

    public function render(
    ) {
        $data = \DB::table('news_latters')->where('email', 'like', "%{$this->search}%")->latest('id')->paginate($this->perPage);
        return view('livewire.newsletter-table', ['data' => $data]);
    }
}
