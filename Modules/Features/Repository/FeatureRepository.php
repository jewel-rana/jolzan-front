<?php


namespace Modules\Features\Repository;


use App\Repository\BaseRepository;
use Modules\Features\Entities\Feature;

class FeatureRepository extends BaseRepository implements FeatureRepositoryInterface
{
    public function __construct(Feature $model)
    {
        parent::__construct($model);
    }

    public function all()
    {
        return parent::all();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        return parent::update($data, $id);
    }

    public function delete($id)
    {
        return parent::delete($id);
    }
}
