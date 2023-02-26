<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\LeanOrm\Blog\Comments;

/**
 * @property mixed $comment_id integer NOT NULL
 * @property mixed $post_id integer NOT NULL
 * @property mixed $datetime timestamp_text
 * @property mixed $name varchar(255) NOT NULL
 * @property mixed $email varchar(255) NOT NULL
 * @property mixed $website varchar(255) NOT NULL
 * @property mixed $body text
 * @property mixed $m_timestamp timestamp_text NOT NULL
 * @property mixed $date_created timestamp_text NOT NULL
 *
 * @method CommentsModel getModel()
 */
class CommentRecord extends \LeanOrm\Model\Record {
    
    //put your code here
}
