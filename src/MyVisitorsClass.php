<?php

namespace Diyar\Visitors;



use Diyar\Visitors\Models\MyVisitors;
use Diyar\Visitors\FetchIp;




class MyVisitorsClass
{

  public function getVisits()
    {

        $vis = "<table>\n";
        $vis .= "<tr> <th>ID</th> <th>IP</th> <th>country</th> <th>city</th> <th>visiting url</th> <th>visiting time</th> </tr>\n";
        
       foreach(MyVisitors::all() as $mVisitors)
          {

	     $a = $mVisitors->id;

	     $b = $mVisitors->ip;

	     $c = $mVisitors->country;

	     $d = $mVisitors->city;

	     $e = $mVisitors->visiting_url;

	     $f = $mVisitors->visited_at;



	     $ab = "</td><td>";

	     $abc = "<tr><td>" . $a . $ab;
	     $abc .= $b . $ab . $c . $ab . $d . $ab . $e . $ab;
	     $abc .= $f . "</td></tr>\n";


	     $vis .= $abc;

          }

         $vis .= "</table>";

        return $vis;

    }





    public function storeVisitor($url)
    {

	$fetch_ip = new FetchIp();
	$usr_ip = $fetch_ip->getUserIp();
	$usr_country = $fetch_ip->ip_info($usr_ip, 'country');
	$usr_city = $fetch_ip->ip_info($usr_ip, 'city');

	$usr_time = date('Y-m-d') . " - " . date('H:i');

        $mVisitors = MyVisitors::create([
             'ip' => $usr_ip,
	     'country' => $usr_country,
	     'city' => $usr_city,
	     'visiting_url' => $url,
             'visited_at' => $usr_time
        ]);
	$mVisitors->save();


     }


}




