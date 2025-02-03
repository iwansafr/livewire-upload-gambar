<?php

namespace App\Livewire;

use App\Models\Buku;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddBuku extends Component
{
    use WithFileUploads;

    public $title;
    public $cover;
    public $description;
    public function render()
    {
        return view('livewire.add-buku');
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'cover' => 'required',
            'description' => 'required'
        ]);

        $buku = new Buku();
        $buku->title = $this->title;
        $buku->description = $this->description;
        $cover = $this->cover->store('buku');
        $buku->cover = $cover;
        $buku->save();
        return session()->flash('success','Buku berhasil ditambahkan');
    }
}
