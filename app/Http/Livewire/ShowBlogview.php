<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class ShowBlogview extends Component
{
    public $blogId;
    public $nextBlogTitle;
    public $nextBlog;
    public $nextBlogId;


    public function mount($blogId)
    {
        $this->blogId = $blogId;
        $this->getNextBlogTitle();
    }

    public function render()
    {

        $blog = Blog::find($this->blogId);

        $nextBlog = Blog::where('created_at', '>', $blog->created_at)
        ->orderBy('created_at', 'asc')
        ->first();

        if ($nextBlog) {

        $this->nextBlogId = $nextBlog->id;

        $this->getNextBlogTitle();
        }
        else{

        $this->nextBlogId = null;
        }
        return view('livewire.show-blogview', [
            'blog' => $blog,
            'nextBlogTitle' => $this->nextBlogTitle,
            'nextBlog' => $this->nextBlog,
        ]);

    }



    private function getNextBlogTitle()
    {
        $currentBlog = Blog::find($this->blogId);
        $this->nextBlog = Blog::where('created_at', '>', $currentBlog->created_at)
                        ->orderBy('created_at', 'asc')
                        ->first();

        $this->nextBlogTitle = $this->nextBlog ? $this->nextBlog->titulo : null;

    }
}
