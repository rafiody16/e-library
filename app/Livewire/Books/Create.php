<?php

namespace App\Livewire\Books;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent; 
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class Create extends ModalComponent
{
    public function render()
    {
        return view('livewire.books.create');
    }
}
