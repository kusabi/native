<?php

namespace Kusabi\Native\Benchmarks\Functions\Arrays;

use Kusabi\Native\Benchmarks\Bench;

class ArraySet extends Bench
{
    public function benchArraySetDeep()
    {
        $array = [];
        array_set($array, 'a.b.c.d.e.f.g.h.i.j.k.l.m.n.o.p.q.r.s.t.u.v.w.x.y.z', 'test');
    }

    public function benchArraySetShallow()
    {
        $array = [];
        array_set($array, 'a', 'test');
    }
}
