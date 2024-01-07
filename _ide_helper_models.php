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
 * App\Models\Alloy
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Alloy findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Alloy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Alloy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Alloy query()
 * @method static \Illuminate\Database\Eloquent\Builder|Alloy whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alloy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alloy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alloy whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alloy whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alloy whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alloy withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class Alloy extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Catalog
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Catalog> $children
 * @property-read int|null $children_count
 * @property-read Catalog|null $parent
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Catalog whereDescription($value)
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
 * @property string $name
 * @property string $slug
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Colour findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Colour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Colour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Colour query()
 * @method static \Illuminate\Database\Eloquent\Builder|Colour whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Colour whereCreatedAt($value)
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
 * App\Models\Gemstone
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Gemstone findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Gemstone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gemstone newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gemstone query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gemstone whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gemstone whereCreatedAt($value)
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
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property float $weight
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Alloy> $alloys
 * @property-read int|null $alloys_count
 * @property-read \App\Models\Catalog $catalog
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Gemstone> $gemstones
 * @property-read int|null $gemstones_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Material> $materials
 * @property-read int|null $materials_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PreciousMetal> $preciousMetals
 * @property-read int|null $precious_metals_count
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery query()
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery whereCatalogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jewellery whereUpdatedAt($value)
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
 * @property string $name
 * @property string $slug
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Material findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Material newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Material newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Material query()
 * @method static \Illuminate\Database\Eloquent\Builder|Material whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Material whereCreatedAt($value)
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
 * App\Models\MetalPurity
 *
 * @property int $id
 * @property int $precious_metal_id
 * @property string $value
 * @property string $slug
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PreciousMetal $preciousMetal
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity query()
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity wherePreciousMetalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MetalPurity withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class MetalPurity extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PreciousMetal
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\MetalPurity> $metalPurities
 * @property-read int|null $metal_purities_count
 * @method static \Illuminate\Database\Eloquent\Builder|PreciousMetal findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|PreciousMetal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PreciousMetal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PreciousMetal query()
 * @method static \Illuminate\Database\Eloquent\Builder|PreciousMetal whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PreciousMetal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PreciousMetal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PreciousMetal whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PreciousMetal whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PreciousMetal whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PreciousMetal withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class PreciousMetal extends \Eloquent {}
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
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Weave findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Weave newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Weave newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Weave query()
 * @method static \Illuminate\Database\Eloquent\Builder|Weave whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weave whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weave whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weave whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weave whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weave whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weave withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class Weave extends \Eloquent {}
}

