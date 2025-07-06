<?php

namespace App\Livewire\Books;

use Livewire\Component;
use App\Models\Book;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.books.index', [
            'books' => Book::latest()->paginate(10),
        ]);
    }
}
