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
 * App\Models\Brand
 *
 * @property int $id
 * @property int $employee_id
 * @property string $name
 * @property string $slug
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Employee $employee
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Jewellery> $jewelleries
 * @property-read int|null $jewelleries_count
 * @method static \Illuminate\Database\Eloquent\Builder|Brand findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand query()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class Brand extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Catalog
 *
 * @property int $id
 * @property int|null $parent_id
 * @property int $employee_id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Employee $employee
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Jewellery> $jewelleries
 * @property-read int|null $jewelleries_count
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class Catalog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Colour
 *
 * @property int $id
 * @property int $employee_id
 * @property string $name
 * @property string $slug
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Employee $employee
 * @method static \Illuminate\Database\Eloquent\Builder|Colour findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Colour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Colour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Colour query()
 * @method static \Illuminate\Database\Eloquent\Builder|Colour whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Colour whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Colour whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Colour whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Colour whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Colour whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Colour whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Colour withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class Colour extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Employee
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Catalog> $catalogs
 * @property-read int|null $catalogs_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Jewellery> $jewelleries
 * @property-read int|null $jewelleries_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Metal> $metals
 * @property-read int|null $metals_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\EmployeeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereUpdatedAt($value)
 */
	class Employee extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Facet
 *
 * @property int $id
 * @property int $employee_id
 * @property string $name
 * @property string $slug
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Employee $employee
 * @method static \Illuminate\Database\Eloquent\Builder|Facet findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Facet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Facet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Facet query()
 * @method static \Illuminate\Database\Eloquent\Builder|Facet whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facet whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facet whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facet whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facet whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facet withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class Facet extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Gemstone
 *
 * @property int $id
 * @property int $employee_id
 * @property string $name
 * @property string $slug
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Employee|null $employees
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Jewellery> $jewelleries
 * @property-read int|null $jewelleries_count
 * @method static \Illuminate\Database\Eloquent\Builder|Gemstone findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Gemstone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gemstone newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gemstone query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gemstone whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gemstone whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gemstone whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gemstone whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gemstone whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gemstone whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gemstone whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gemstone withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class Gemstone extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Jewellery
 *
 * @property int $id
 * @property int $catalog_id
 * @property int $employee_id
 * @property string $vendor_code
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property float $weight
 * @property float $price
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Brand> $brands
 * @property-read int|null $brands_count
 * @property-read \App\Models\Catalog $catalog
 * @property-read \App\Models\Employee $employee
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Gemstone> $gemstones
 * @property-read int|null $gemstones_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Material> $materials
 * @property-read int|null $materials_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Metal> $metals
 * @property-read int|null $metals_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Weave> $weaves
 * @property-read int|null $weaves_count
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery query()
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery whereCatalogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery whereVendorCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class Jewellery extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Material
 *
 * @property int $id
 * @property int $employee_id
 * @property string $name
 * @property string $slug
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Jewellery> $jewelleries
 * @property-read int|null $jewelleries_count
 * @method static \Illuminate\Database\Eloquent\Builder|Material findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Material newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Material newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Material query()
 * @method static \Illuminate\Database\Eloquent\Builder|Material whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Material whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Material whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Material whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Material whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Material whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Material whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Material withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class Material extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Metal
 *
 * @property int $id
 * @property int $employee_id
 * @property string $name
 * @property string $slug
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Employee $employee
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Jewellery> $jewelleries
 * @property-read int|null $jewelleries_count
 * @method static \Illuminate\Database\Eloquent\Builder|Metal findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Metal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Metal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Metal query()
 * @method static \Illuminate\Database\Eloquent\Builder|Metal whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Metal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Metal whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Metal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Metal whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Metal whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Metal whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Metal withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class Metal extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MetalPurity
 *
 * @property int $id
 * @property int $employee_id
 * @property string $name
 * @property string $slug
 * @property string $value
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Metal> $metals
 * @property-read int|null $metals_count
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity query()
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class MetalPurity extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Weave
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Jewellery> $jewelleries
 * @property-read int|null $jewelleries_count
 * @method static \Illuminate\Database\Eloquent\Builder|Weave findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Weave newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Weave newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Weave query()
 * @method static \Illuminate\Database\Eloquent\Builder|Weave withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class Weave extends \Eloquent {}
}

