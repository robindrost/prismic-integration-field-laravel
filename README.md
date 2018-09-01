# Prismic integration field for Laravel

## Installation

```
composer require robindrost/prismic-integration-field-laravel
```

## Usage

You can use the implementation of the integration field on your model in two ways.

1. You either specify the fields in the database that are required by the integration field.
2. Or your define attribute methods like `getImagePathAttribute()`.

The HasIntegrationField trait excepts that you use the default timestamp fields of Laravel. If however you do not use these, please implement the `toIntegrationField()` method yourself.

#### Model implementation example

You model must include these fields (or override the trait method) or method accessors.

- id
- title
- description
- image_url
- updated_at

Please note that I use a mix of option 1 and 2 here just as an example.

```
class MyModel extends Model implements ModelToIntegrationField
{
    use HasIntegrationField;

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
}
```

#### Collection implementation

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
