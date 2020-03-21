<?php

namespace GuillermoandraeTest\Common;

use Guillermoandrae\Common\DumpableTrait;
use PHPUnit\Framework\TestCase;

class DumpableTraitTest extends TestCase
{
    public function testDump()
    {
        $dumpable = $this->getMockForTrait(DumpableTrait::class);
        $this->assertSame(var_dump($dumpable), $dumpable->dump());
    }
}
