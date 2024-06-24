<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;
use WithPagination;

class ShowBlog extends Component
{
    public function render()
    {
        $consultaBlogs = Blog::paginate(12);

        return view('livewire.show-blog',[
            'blogs' => $consultaBlogs
        ]);
    }
}
