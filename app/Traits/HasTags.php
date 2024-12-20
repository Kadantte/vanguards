<?php

declare(strict_types=1);

namespace App\Traits;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * Trait for models that can be tagged.
 *
 * Provides methods for managing tags on a model, including
 * retrieving, adding, and removing tags.
 */
trait HasTags
{
    /**
     * Get all the tags for the model.
     *
     * @return MorphToMany<Tag, $this>
     */
    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable', 'taggables', 'taggable_id', 'tag_id');
    }

    /**
     * Add a tag to the model.
     */
    public function tag(string $label): void
    {
        $tag = Tag::firstOrCreate(
            ['label' => $label],
            ['user_id' => auth()->id()]
        );

        $this->tags()->syncWithoutDetaching([$tag->id]);
    }

    /**
     * Remove a tag from the model.
     */
    public function untag(string $label): void
    {
        $tag = Tag::where('label', $label)->first();

        if (! $tag) {
            return;
        }

        $this->tags()->detach([$tag->id]);
    }
}
