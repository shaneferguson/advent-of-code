<?php

namespace spec\Day2;

use Day2\Box;
use Day2\BoxInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BoxCollectionSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType('Day2\BoxCollection');
    }

    function it_can_add_boxes(BoxInterface $box)
    {
        $this->addBox($box);

        $boxes = $this->getBoxes();
        $boxes[0]->shouldBe($box);
    }

    function it_can_get_total_wrapping_area(
        BoxInterface $box1,
        BoxInterface $box2
    ) {
        $boxArea1 = 78;
        $boxArea2 = 15;

        $box1->getWrappingPaperArea()->willReturn($boxArea1);
        $box2->getWrappingPaperArea()->willReturn($boxArea2);

        $this->addBox($box1);
        $this->addBox($box2);

        $this->getTotalWrappingArea()->shouldBe($boxArea1 + $boxArea2);
    }
}
