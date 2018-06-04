<?php

namespace Guillermoandrae\Common;

trait DumpableTrait
{
    /**
     * Dumps this object.
     */
    final public function dump()
    {
        dump($this);
    }
}
