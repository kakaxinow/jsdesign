<?php
//观察者模式
namespace Imooc;

class  Event
{

    public function trigger()
    {
        //        echo '逻辑1<br/>\n';
        //        echo '逻辑2<br/>\n';
        //        echo '逻辑3<br/>\n';

        echo "逻辑4<br/>\n";
        //$this->notify();
    }
}

//class Obsever1 extends EventGenerator
//{
//    function update($event_info = null)
//    {
//        echo "逻辑1<br/>\n";
//    }
//}
//class Obsever2 extends EventGenerator
//{
//    function update($event_info = null)
//    {
//        echo "逻辑2<br/>\n";
//    }
//}

$event = new Event();
//$event->addObserver(new Obsever1());
//$event->addObserver(new Obsever2());
$event->trigger();

//echo 'aaaaa';