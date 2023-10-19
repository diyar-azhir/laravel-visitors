<?php

namespace Diyar\Visitors\Controllers;


use Diyar\Visitors\MyVisitorsClass;

class VisitorsController
{
    public function __invoke(MyVisitorsClass $mVisitors) {

	//	    
	$visitors_list = $mVisitors->getVisits();
	return view('visitors::index', ['vises' => $visitors_list]);
        
    }
}


