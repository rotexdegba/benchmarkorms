<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\LeanOrm\Blog\Summaries;

/**
 * @property mixed $summary_id integer NOT NULL
 * @property mixed $post_id integer NOT NULL
 * @property mixed $view_count integer NOT NULL
 * @property mixed $comment_count integer NOT NULL
 * @property mixed $m_timestamp timestamp_text NOT NULL
 * @property mixed $date_created timestamp_text NOT NULL
 *
 * @method SummariesModel getModel()
 */
class SummaryRecord extends \LeanOrm\Model\Record {
    
    //put your code here
}
