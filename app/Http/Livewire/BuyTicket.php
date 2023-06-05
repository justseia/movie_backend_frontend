<?php

namespace App\Http\Livewire;

use App\Models\Movie;
use Livewire\Component;

class BuyTicket extends Component
{
    public $movie;
    public $category_id;

    public function mount()
    {
        $this->menus = Movie::all();
        $this->category_id = 1;
    }

    public function category($newCategory)
    {
        if ($newCategory == 0) {
            $this->menus = Movie::all();
        } else {
            $this->menus = Movie::where('restauran_id', $newCategory)->get();
        }
        $this->category_id = $newCategory;
    }

    public function render()
    {
        return view('livewire.buy-ticket', [
            'movie' => $this->movie,
        ]);
    }
}
