<?php

namespace App\Observers;

use App\Models\Post;

class PostObserver
{
    //creating
    //created
    //updating
    public function updating(Post $post)
    {
        if ($post->is_published && !$post->is_published) {
            $post->published_at = now();
        }
    }

    //updated
    //deleting
    //deleted
}
