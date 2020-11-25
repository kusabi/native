<?php

namespace Kusabi\Native\Benchmarks\Functions\Arrays;

use Kusabi\Native\Benchmarks\Bench;

/**
 * @BeforeMethods({"init"})
 */
class ArrayAccess extends Bench
{
    protected $array;

    public function benchArrayAt()
    {
        array_at($this->array, 6);
    }

    public function benchArrayExistsDeep()
    {
        array_exists($this->array, 'a.b.c.d.e.f.g.h.i.j.k.l.m.n.o.p.q.r.s.t.u.v.w.x.y.z');
    }

    public function benchArrayExistsShallow()
    {
        array_exists($this->array, 'a');
    }

    public function benchArrayGetDeep()
    {
        array_get($this->array, 'a.b.c.d.e.f.g.h.i.j.k.l.m.n.o.p.q.r.s.t.u.v.w.x.y.z');
    }

    public function benchArrayGetShallow()
    {
        array_get($this->array, 'a');
    }

    public function benchArrayKeyAt()
    {
        array_key_at($this->array, 6);
    }

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

    public function benchArrayUnsetDeep()
    {
        array_unset($this->array, 'a.b.c.d.e.f.g.h.i.j.k.l.m.n.o.p.q.r.s.t.u.v.w.x.y.z');
    }

    public function benchArrayUnsetShallow()
    {
        array_unset($this->array, 'a');
    }

    public function init()
    {
        $this->array = [];
        array_set($this->array, 'a.b.c.d.e.f.g.h.i.j.k.l.m.n.o.p.q.r.s.t.u.v.w.x.y.z', 'test');
    }
}
