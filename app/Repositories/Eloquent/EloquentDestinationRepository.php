<?php

namespace App\Repositories\Eloquent;

use App\Destination;
use App\Repositories\Contracts\DestinationRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentDestinationRepository extends AbstractRepository implements DestinationRepository
{
    public function entity()
    {
        return Destination::class;
    }

     /**
     * Get's a post by it's ID
     *
     * @param int
     * @return collection
     */
    public function get($post_id)
    {
        return Post::find($post_id);
    }

    /**
     * Get's all posts.
     *
     * @return mixed
     */
    public function all()
    {
        return Post::all();
    }

    /**
     * Deletes a post.
     *
     * @param int
     */
    public function delete($post_id)
    {
        Post::destroy($post_id)
    }

    /**
     * Updates a post.
     *
     * @param int
     * @param array
     */
    public function update($post_id, array $post_data)
    {
        Post::find($post_id)->get->update($post_data);
    }
}
