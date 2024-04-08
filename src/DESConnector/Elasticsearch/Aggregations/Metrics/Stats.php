<?php

namespace nodespark\DESConnector\Elasticsearch\Aggregations\Metrics;

/**
 * Class Stats
 *
 * @package nodespark\DESConnector\Elasticsearch\Aggregations\Metrics
 */
class Stats extends Metric
{

  const TYPE = 'stats';

  public function __construct($aggrName, $aggrFieldName)
  {
    parent::__construct($aggrName, $aggrFieldName, self::TYPE);
  }

}
