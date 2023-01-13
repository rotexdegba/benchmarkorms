<?php
declare(strict_types=1);

namespace TestLeanOrm\Db\KeysValues;

/**
 * @property mixed $id int unsigned NOT NULL
 * @property mixed $key_name text NOT NULL
 * @property mixed $value text NOT NULL
 * @property mixed $blankable_value text
 * @property mixed $m_timestamp datetime NOT NULL
 * @property mixed $date_created datetime NOT NULL
 *
 * @method KeysValuesModel getModel()
 */
class KeyValueRecord extends \LeanOrm\Model\Record {
    
    //put your code here
}
