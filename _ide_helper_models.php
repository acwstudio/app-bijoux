<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Catalog
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog query()
 */
	class Catalog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Employee
 *
 * @property mixed $password
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Catalog> $catalogs
 * @property-read int|null $catalogs_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Jewellery> $jewelleries
 * @property-read int|null $jewelleries_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee query()
 */
	class Employee extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Jewellery
 *
 * @property-read \App\Models\Catalog|null $catalog
 * @property-read \App\Models\Employee|null $employee
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery query()
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class Jewellery extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property mixed $password
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 */
	class User extends \Eloquent {}
}

