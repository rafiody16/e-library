<?php

namespace App\Livewire\Books;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{
    use WithPagination, WithFileUploads;

    public $id_category, $name_book, $photo_book, $author,
           $publisher, $publication_date, $description,
           $stock, $isbn;

    public function openCreateBookModal()
    {
        $this->resetInputFields();
        $this->dispatch('openModal', component: 'create-books');
    }

    public function resetInputFields()
    {
        $this->id_category = null;
        $this->name_book = '';
        $this->photo_book = null;
        $this->author = '';
        $this->publisher = '';
        $this->publication_date = '';
        $this->description = '';
        $this->stock = null;
        $this->isbn = '';
    }

    public function store()
    {
        $data = $this->validate([
            'id_category' => 'required|exists:categories,id_category',
            'name_book' => 'required|string|max:255',
            'photo_book' => 'required|image|max:2048',
            'author' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'publication_date' => 'required|date',
            'description' => 'nullable|string',
            'stock' => 'required|integer|min:0',
            'isbn' => 'nullable|string|max:20',
        ]);

        $photoPath = null;

        if ($this->photo_book) {
            // Pastikan folder 'books' exists
            Storage::disk('public')->makeDirectory('books');
            $photoPath = $this->photo_book->store('books', 'public');
        }

        Book::create([
            'id_category' => $data['id_category'],
            'name_book' => $data['name_book'],
            'photo_book' => $photoPath,
            'author' => $data['author'],
            'publisher' => $data['publisher'],
            'publication_date' => $data['publication_date'],
            'description' => $data['description'],
            'stock' => $data['stock'],
            'isbn' => $data['isbn'],
        ]);

        session()->flash('message', 'Buku berhasil ditambahkan!');
        $this->dispatch('closeModal');
        $this->resetInputFields();
        return redirect()->route('books.index');
    }

    public function render()
    {
        return view('livewire.books.index', [
            'books' => Book::latest()->paginate(10),
            'categories' => Category::all(),
        ]);
    }
}
