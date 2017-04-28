<?php

namespace Podcast\Domain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Podcast extends Model
{
    /** @var string */
    protected $table = 'podcast';

    /**
     * @return Collection
     */
    public function getFilesAttribute(): Collection
    {
        return collect([
            'mp3' => $this->file_mp3,
            'ogg' => $this->file_ogg,
        ]);
    }
}
