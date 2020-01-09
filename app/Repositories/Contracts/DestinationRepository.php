<?php

namespace App\Repositories\Contracts;

interface DestinationRepository
{
    /**
     * Get's a Destination by it's ID
     *
     * @param int
     */
    public function get($id);


    /**
     * Get's all Destinations.
     *
     * @return mixed
     */
    public function all();

    /**
     * Deletes a Destination.
     *
     * @param int
     */
    public function delete($id);

    /**
     * Updates a Destination.
     *
     * @param int
     * @param array
     */
    public function update($id, array $data);
}
