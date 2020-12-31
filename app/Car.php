<?php

namespace App;

use ChristianKuri\LaravelFavorite\Traits\Favoriteable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Jenssegers\Date\Date;
use Kyslik\ColumnSortable\Sortable;
use Nicolaslopezj\Searchable\SearchableTrait;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Facades\Voyager;

class Car extends Model
{
    use Favoriteable,  SearchableTrait, Sortable;

    protected $fillable = ['title', 'slug', 'description', 'price', 'image', 'status', 'category_id',
         'user_id', 'Power', 'active','mileage','quantity','seat', 'type_id', 'stock','speed','bootSpace','transmission','fuelType',
        'engineDisplacement','torque','engineType','driveType','wheelSize','cylinders','paddleShift','size',
        'model'
    ];
    public $sortable = ['title', 'price','description'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        Date::setLocale('fr');
    }
    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'cars.title' => 10,
            'categories.name' => 5
            //'properties.description' => 10,
        ],
        'joins' => [
            'categories' => ['categories.id', 'cars.category_id']
        ]
    ];
    public function getCreatedFormatAtAttribute($created_at)
    {
        return Date::make($created_at)->format(' j F, Y');
    }
    public function getFileAttribute($image)
    {
        if (Str::startsWith($image, 'http://') || Str::startsWith($image, 'https://')) {
            return asset(Voyager::image($image));
        }
        return Voyager::image($image);

    }

    public function getFirstImageAttribute()
    {
        $phone = $this;
        $images = json_decode($phone->image);

        foreach ($images as $image) {
            if (Str::startsWith($image, 'http://') || Str::startsWith($image, 'https://')) {
                return asset(Voyager::image($image));
            } else {
                return Voyager::image($image);
            }
        }
        return false;

    }

    public function getJsonDecodeImagesAttribute()
    {
        $images = json_decode($this->image);
        $images_array = [];
        foreach ($images as $image) {
            if (Str::startsWith($image, 'http://') || Str::startsWith($image, 'https://')) {
                array_push($images_array, asset(Voyager::image($image)));
            } else {
                array_push($images_array, Voyager::image($image));
            }

        }
        return $images_array;
    }
    public function getSlugLinkAttribute()
    {
        return route('cars.show', $this->id . '-' . $this->slug);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /*public function getCountReviewsAttribute()
    {
        return $this->getApprovedRatings($this->id)->count();
    }*/

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
