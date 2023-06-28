<?php

include_once 'model/Friend.php';
include_once 'dao/FriendDao.php';
include_once 'helper/PDOMySQL.php';
include_once 'service/FriendService.php';

//example to insert an object to friend table
//(new FriendService())->insert(new Friend(null, "Andi", "1976-10-21", "Syarifahning", "+6281156569798"));

//example to update friend record in friend table
//(new FriendService())->update(new Friend(5, "Andi", "1976-10-22", "Syarifahning", "+6281156569798"));

//example to delete a friend record in friend table
//(new FriendService())->delete(5);



//print all friend object
//print "print in object: " . PHP_EOL;
//foreach((new FriendService())->getAllFriends() as $f){
//    print $f . PHP_EOL;
//}

//print all object friend in json format
//print PHP_EOL;
//print "print in json : " . PHP_EOL ;
//foreach ((new FriendService())->getAllFriends() as $f){
//    print json_encode($f). PHP_EOL;
//}

