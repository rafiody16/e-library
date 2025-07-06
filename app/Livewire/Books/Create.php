<?php

namespace App\Livewire\Books;

use Livewire\Component;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use LivewireUI\Modal\ModalComponent;
use LivewireUI\Modal\InteractsWithModal;

class Create extends ModalComponent
{

    public $isOpen = false;

    public function openModal()
    {
        $this->isOpen = true;
    }

    // public function closeModal()
    // {
    //     $this->isOpen = false;
    // }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.books.create', [
            'categories' => $categories,
        ]);

    }

}
