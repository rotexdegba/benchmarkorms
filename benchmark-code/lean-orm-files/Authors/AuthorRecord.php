<?php
declare(strict_types=1);

namespace Benchmark\LeanOrm\Blog\Authors;

/**
 * @property mixed $author_id integer NOT NULL
 * @property mixed $name varchar(255) NOT NULL
 * @property mixed $m_timestamp timestamp_text NOT NULL
 * @property mixed $date_created timestamp_text NOT NULL
 *
 * @method AuthorsModel getModel()
 */
class AuthorRecord extends \LeanOrm\Model\Record {
    
    //put your code here
}
