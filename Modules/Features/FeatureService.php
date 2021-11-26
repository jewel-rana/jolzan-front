<?php


namespace Modules\Features;


use Illuminate\Support\Facades\DB;
use Modules\Features\Jobs\FeatureMediaUploadJob;
use Modules\Features\Repository\FeatureRepositoryInterface;
use Modules\Media\MediaService;

class FeatureService
{
    private $feature;
    private $mediaService;

    public function __construct(
        FeatureRepositoryInterface $featureRepository,
        MediaService $mediaService
    )
    {
        $this->feature = $featureRepository;
        $this->mediaService = $mediaService;
    }

    public function create(array $data)
    {
        DB::transaction(function () use ($data) {
            $feature = $this->feature->create($data);
            dispatch(new FeatureMediaUploadJob($feature, $this->mediaService));
        }, 2);
    }

    public function update(array $data, int $id)
    {
        return $this->feature->update($data, $id);
    }

    public function delete($id)
    {
        return $this->feature->delete($id);
    }
}
