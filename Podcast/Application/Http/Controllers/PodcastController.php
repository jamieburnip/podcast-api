<?php

namespace Podcast\Application\Http\Controllers;

use Podcast\Domain\Models\Podcast;
use Podcast\Domain\Podcast\PodcastTransformer;

/**
 * Class PodcastController
 *
 * @package Podcast\Application\Http\Controllers
 */
class PodcastController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        $podcast = Podcast::latest()->paginate();

        return fractal($podcast, new PodcastTransformer)->toArray();
    }

    /**
     * @param $id
     *
     * @return array
     */
    public function show($id)
    {
        $podcast = Podcast::findOrFail($id);

        return fractal($podcast, new PodcastTransformer)->toArray();
    }
}
