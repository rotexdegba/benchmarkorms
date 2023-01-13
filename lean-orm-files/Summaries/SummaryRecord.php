<?php
declare(strict_types=1);

namespace TestLeanOrm\Db\Summaries;

/**
 * @property mixed $summary_id int unsigned NOT NULL
 * @property mixed $post_id int unsigned NOT NULL
 * @property mixed $view_count int
 * @property mixed $comment_count int
 * @property mixed $m_timestamp datetime NOT NULL
 * @property mixed $date_created datetime NOT NULL
 *
 * @method SummariesModel getModel()
 */
class SummaryRecord extends \LeanOrm\Model\Record {
    
    //put your code here
}
