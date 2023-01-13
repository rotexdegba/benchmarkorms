<?php
declare(strict_types=1);

namespace TestLeanOrm\Db\Posts;

/**
 * @property mixed $post_id int unsigned NOT NULL
 * @property mixed $author_id int unsigned NOT NULL
 * @property mixed $datetime datetime
 * @property mixed $title varchar(255)
 * @property mixed $body text
 * @property mixed $m_timestamp datetime NOT NULL
 * @property mixed $date_created datetime NOT NULL
 *
 * @method PostsModel getModel()
 */
class PostRecord extends \LeanOrm\Model\Record {
    
    //put your code here
}
