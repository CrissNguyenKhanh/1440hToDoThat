<?php

namespace App\Repositories;

use App\Models\Widget;
use App\Repositories\Interfaces\WidgetRepositoryInterface;
use App\Repositories\BaseRepository;

/**
 * Class WidgetService
 * @package App\Services
 */
class WidgetRepository extends BaseRepository implements WidgetRepositoryInterface
{
    protected $model;

    public function __construct(
        Widget $model
    ){
        $this->model = $model;
    }
 
  public function getWidgetByWhereIn(array $WhereIn = [],$whereInField = 'keyword'){
    return $this->model->where(
     [   config('apps.general.defaultPublish')]
    )
    ->whereIn($whereInField,$WhereIn)
    ->orderByRaw("FIELD(keyword, '".implode("','",$WhereIn)."')")
    ->get();
  }
}
