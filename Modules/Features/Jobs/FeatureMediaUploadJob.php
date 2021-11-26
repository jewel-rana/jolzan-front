<?php

namespace Modules\Features\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Modules\Features\Entities\Feature;
use Modules\Media\MediaService;

class FeatureMediaUploadJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $feature;
    private $media;

    public function __construct(Feature $feature, MediaService $media)
    {
        $this->feature = $feature;
        $this->media = $media;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if(request()->has('attachment')) {
            $media = $this->media->upload(request()->file('attachment'));
            $this->feature->medias()->attach($media->id);
        }
    }
}
