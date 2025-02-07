<?php

namespace App\Repositories;

use App\Models\Slide;
use App\Repositories\Interfaces\SlideRepositoryInterface;
use App\Repositories\BaseRepository;

/**
 * Class UserService
 * @package App\Services
 */
class SlideRepository extends BaseRepository implements SlideRepositoryInterface
{
    protected $model;

    public function __construct(
        Slide $model
    ){
        $this->model = $model;
    }

    

    public function getSlideById(int $id = 0, $language_id = 0){
        return $this->model->select([
                'attribute_catalogues.id',
                'attribute_catalogues.parent_id',
                'attribute_catalogues.image',
                'attribute_catalogues.icon',
                'attribute_catalogues.album',
                'attribute_catalogues.publish',
                'attribute_catalogues.follow',
                'tb2.name',
                'tb2.description',
                'tb2.content',
                'tb2.meta_title',
                'tb2.meta_keyword',
                'tb2.meta_description',
                'tb2.canonical',
            ]
        )
        ->join('attribute_catalogue_language as tb2', 'tb2.attribute_catalogue_id', '=','attribute_catalogues.id')
        ->where('tb2.language_id', '=', $language_id)
        ->find($id);
    }

    public function getAll(int $languageId = 0){
        return $this->model->with(['attribute_catalogue_language' => function($query) use ($languageId){
            $query->where('language_id', $languageId);
        }, ])->get();
    }

}
