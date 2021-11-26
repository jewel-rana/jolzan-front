<?php

use Illuminate\Support\Collection;
use Modules\Deal\DealService;
use Modules\Deal\Entities\Deal;
use Modules\Deal\Repository\DealRepository;
use Modules\Media\Entities\Media;
use Modules\Media\MediaService;
use Modules\Media\Repository\MediaRepository;
use Modules\Menu\Entities\Menu;
use Modules\Menu\MenuService;
use Modules\Menu\Repository\MenuRepository;
use Modules\Page\Entities\Page;
use Modules\Page\PageService;
use Modules\Page\Repository\PageRepository;
use Modules\Setting\OptionService;
use Modules\Slider\Entities\Slider;
use Modules\Slider\Repository\SliderRepository;
use Modules\Slider\SliderService;

function getOption($key, $default = null)
{
    $option = new OptionService();
    return $option->get($key, $default);
}

function getMenu($name = 'top_menu')
{
    $menus = new MenuService(new MenuRepository(new Menu()));
    return $menus->getMenu($name);
}

function getSlider($slider = 1)
{
    $sliders = new SliderService(new SliderRepository(new Slider()), new MediaService(new MediaRepository(new Media())));
    return $sliders->getSliders()->firstWhere('id', $slider) ?? null;
}

function getServices($service = 'service'): ? Collection
{
    return null;
}

function getDeals($deal_type = 'main'): ?Collection
{
    $deals = new DealService(new DealRepository(new Deal()));
    return $deals->getDeals()->where('deal_type', $deal_type) ?? null;
}

function getPageAttributes($pageID, $attribute): string
{
    $service = new PageService(new PageRepository(new Page()));
    return $service->getAttributes($pageID, $attribute);
}

function getPageAttribute($pageID, $attribute): string
{
    $service = new PageService(new PageRepository(new Page()));
    return $service->getAttributes($pageID, $attribute)->firstWhere('label', $attribute)->content;
}
