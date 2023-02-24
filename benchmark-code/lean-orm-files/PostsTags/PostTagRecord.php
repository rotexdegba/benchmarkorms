<?php
declare(strict_types=1);

namespace Benchmark\LeanOrm\Blog\PostsTags;

/**
 * @property mixed $posts_tags_id integer NOT NULL
 * @property mixed $post_id integer NOT NULL
 * @property mixed $tag_id integer NOT NULL
 * @property mixed $m_timestamp timestamp_text NOT NULL
 * @property mixed $date_created timestamp_text NOT NULL
 *
 * @method PostsTagsModel getModel()
 */
class PostTagRecord extends \LeanOrm\Model\Record {
    
    //put your code here
}
