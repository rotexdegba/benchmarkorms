<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\Eloquent\Blog;

use Illuminate\Database\Eloquent\Model;

/**
 * Description of BaseModel
 *
 * @author rotimi
 */
class BaseModel extends Model {

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'm_timestamp';
}
