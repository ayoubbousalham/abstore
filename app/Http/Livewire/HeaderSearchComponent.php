<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categorie;

class HeaderSearchComponent extends Component
{
    

    public $search;
    public $product_cat;
    public $product_cat_id;
    public $categorie_slug_id;


    public function mount(){
        $this->product_cat = 'All categories';
        $this->fill(request()->only('search','product_cat','product_cat_id'));
    }
    public function render()
    {
        $categories = Categorie::all();
        return view('livewire.header-search-component',['categories'=>$categories])->layout('layouts.base');
    }
}
