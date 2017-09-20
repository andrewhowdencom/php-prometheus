<?php
/**
 * Created by PhpStorm.
 * User: sitewards
 * Date: 20/09/17
 * Time: 8:49 PM
 */

namespace littlemanco\php\metrics;

use littlemanco\php\metrics\collectors;
use Dotenv\Dotenv;

class app
{
    /**
     * @var array
     */
    private $aMetrics;

    private $aConfiguration;

    /**
     * TOdo: inject configuration here
     * Todo: Inject prometheus metrics here
     *
     * app constructor.
     */
    public function __construct(
        array $aConfiguration
    ) {
        $this->aMetrics       = [];
        $this->aConfiguration = $aConfiguration;
    }

    private function collect()
    {
        var_dump($this->aConfiguration);

        $oCore = new collectors\core();
        // Todo: Metric keys need to be namedspaced somehow. Maybe can do that here? unsure.
        $this->aMetrics = array_merge($this->aMetrics, $oCore->collect());

        return $this->aMetrics;
    }

    public function render()
    {
        print_r($this->collect());
    }
}