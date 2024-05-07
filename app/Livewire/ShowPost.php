<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPost extends Component
{
    /**
     * use WithPagination; permite quue la pagina no se recargue}
     * al utilizar el paginador
     */
    use WithPagination;
    public $search; 


    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        // $post = Post::all();

        // return view('livewire.show-post', [
        //     'post' => Post::search('titulo', $this->search)->paginate(5),
        // ]);
        $post = Post::where('titulo', 'like', '%'. $this->search.'%')->orWhere(
            'extracto', 'like', '%'. $this->search. '%'
        )->paginate(4);
        return view('livewire.show-post', compact('post'));
    }
}
