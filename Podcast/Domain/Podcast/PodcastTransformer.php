<?php

namespace Podcast\Domain\Podcast;

use League\Fractal\TransformerAbstract;
use Podcast\Domain\Models\Podcast;

/**
 * Class PodcastTransformer
 *
 * @package Podcast\Domain\Podcast
 */
class PodcastTransformer extends TransformerAbstract
{
    /**
     * @param Podcast $podcast
     *
     * @return array
     */
    public function transform(Podcast $podcast): array
    {
        return [
            'id' => $podcast->id,
            'title' => $podcast->title,
            'description' => $podcast->description,
            'files' => $podcast->files,
            'created_at' => $podcast->created_at->toDateTimeString(),
        ];
    }
}