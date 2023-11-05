<?php

namespace Konnec\Debugging\Stream;

use Illuminate\Support\Facades\Cache;

class Stream
{
    /**
     * Adds a message to the stream
     */
    public function add(mixed $data): void
    {
        Cache::lock('konnec-debugging', 5)->block(3, function () use ($data) {
           $messages = Cache::rememberForever('konnec-debugging', fn () => []);
           $messages[] = $data;
           Cache::forever('konnec-debugging', $messages);
        });
    }

    /**
     * Removes a first element from the stream
     */
    public function first(): mixed
    {
        if (! $this->hasMessage()) return null;

        return Cache::lock('konnec-debugging', 5)->block(3, function () {
            $messages = Cache::rememberForever('konnec-debugging', fn () => []);
            $message = array_shift($messages);
            Cache::forever('konnec-debugging', $messages);
            return $message;
        });
    }

    protected function hasMessage(): bool
    {
        $messages = Cache::get('konnec-debugging');
        if (is_null((array) $messages)) {
            return false;
        }
        return true;
    }
}
