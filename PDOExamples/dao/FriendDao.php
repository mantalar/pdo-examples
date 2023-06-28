<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

/**
 *
 * @author me
 */
interface FriendDao {
    function insert(Friend $f):void;
    function update(Friend $f):void;
    function delete(int $id):void;
    function getAFriendById(int $id): ?Friend;
    function getAllFriends(): array;
}
