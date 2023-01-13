<?php
declare(strict_types=1);

namespace TestLeanOrm\Db\Comments;

/**
 * @property mixed $comment_id int unsigned NOT NULL
 * @property mixed $post_id int unsigned NOT NULL
 * @property mixed $datetime datetime
 * @property mixed $name varchar(255)
 * @property mixed $email varchar(255)
 * @property mixed $website varchar(255)
 * @property mixed $body text
 * @property mixed $m_timestamp datetime NOT NULL
 * @property mixed $date_created datetime NOT NULL
 *
 * @method CommentsModel getModel()
 */
class CommentRecord extends \LeanOrm\Model\Record {
    
    //put your code here
}
