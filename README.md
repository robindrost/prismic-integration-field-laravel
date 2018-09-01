# Prismic integration field for Laravel

This package allows you to use Eloquent models as Prismic integration fields. You must implement an interface and have an option to use the trait on your models.

The package also provides a middleware that will verify the access tokens from Prismic.

## Installation

```
composer require robindrost/prismic-integration-field-laravel
```

## Usage

You can use the implementation of the integration field on your model in two ways.

1. You either specify the fields in the database that are required by the integration field.
2. Or your define attribute accessor methods like `getImageUrlAttribute()`.

### Model implementation example

Please note that I use a mix of option 1 and 2 here just as an example.

```
class MyModel extends Model implements ModelToIntegrationField
{
    // Using existing database fields
    public $fillable = [
        'id',
        'title',
        'description',
    ];

    // Using a getter method
    public function getImageUrlAttribute()
    {
        return 'https://via.placeholder.com/350x150';
    }

    // Convert this model to an integration field.
    public function toIntegrationField()
    {
        IntegrationField::create()
            ->setId($this->id)
            ->setTitle($this->title)
            ->setDescription($this->description)
            ->setImageUrl($this->image_url)
            ->setUpdatedAt($this->updated_at->timestamp)
            ->setBlob([
                'id' => $this->id,
            ]);
    }
}
```

### Collection implementation

```
// Override Laravels newCollectiom method:
class MyModel extends Model implements ModelToIntegrationField
{
    ...

    public function newCollection(array $models)
    {
        return new IntegrationFieldCollection($models);
    }
}

// Usage in your controller:
class MyController extends Controller
{
    public function myApiMethodCallback()
    {
        $models = MyModel::paginate(50);

        return [
            'results_size' => $models->total(),
            'results' => $models->getCollection()->toArray(),
        ];
    }
}
```

And thats about it. Prismic can now handle the array returned by your collection.

## Working with access tokens

This package also provide an easy way of protecting routes with access tokens. Prismic allows you to define access tokens for each integration field. These access tokens need to be defined in the config file and used by the middleware provided by this package.

1. First publish the configuration file to your config folder.

```
php artisan vendor:publish
```

And choose the service provider from this package.

2. Now add access tokens inside the added configuration file. This is just an array of strings.

### Apply the middleware on your routes

3. Add the middleware to your app/Http/Kernel.php.

```
protected $routeMiddleware = [

....
'prismic.verify.access.token' => \RobinDrost\PrismicIntegrationField\Http\Middleware\VerifyAccessToken::class,

];
```

4. Apply the middleware on your api routes:

```
Route::middleware('prismic.verify.access.token')->get('/your-path', 'YourController@index');
```

Now only allowed access tokens will reach the controller.
