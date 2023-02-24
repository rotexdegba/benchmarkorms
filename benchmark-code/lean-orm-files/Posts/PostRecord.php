<?php
declare(strict_types=1);

namespace Benchmark\LeanOrm\Blog\Posts;

/**
 * @property mixed $post_id integer NOT NULL
 * @property mixed $author_id integer NOT NULL
 * @property mixed $datetime timestamp_text
 * @property mixed $title varchar(255) NOT NULL
 * @property mixed $body text
 * @property mixed $m_timestamp timestamp_text NOT NULL
 * @property mixed $date_created timestamp_text NOT NULL
 *
 * @method PostsModel getModel()
 */
class PostRecord extends \LeanOrm\Model\Record {
    
    //put your code here
}
