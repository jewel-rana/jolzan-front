<?php


namespace Modules\Page;


use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Modules\Page\Entities\PageAttribute;
use Modules\Page\Repository\PageRepositoryInterface;

class PageService
{
    /**
     * @var PageRepositoryInterface
     */
    private $repository;

    public function __construct(PageRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function create(array $data)
    {
        return $this->repository->create($data + ['user_id' => auth()->user()->id]);
    }

    public function update(array $data, $id)
    {
        return $this->repository->update($data, $id);
    }

    public function getAttributes($pageID, $attribute) : Collection
    {
        return Cache::remember('attributes', 3600, function() {
            return new Collection(function() {
                return PageAttribute::all();
            });
        })
            ->where('page_id', $pageID);
    }
}
