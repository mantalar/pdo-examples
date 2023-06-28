<?php

/**
 * Description of FriendService
 *
 * @author me
 */
class FriendService implements FriendDao {
    
    public function delete(int $id): void {
        try{
            $sql = "delete from friend where id=?";
            PDOUtils::getMySQLConnection()->prepare($sql)->execute([$id]);
        } catch (PDOException $ex) {
            die("error: {$ex->getMessage()}");
        }
    }

    public function getAFriendById(int $id): ?Friend {
        $result = null;
        try{
            $sql = "select * from friend where id=?";
            $q= PDOUtils::getMySQLConnection()->prepare($sql);
            $q->execute([$id]);
            if(($r=$q->fetch())!=null){
                $result = new Friend($r->id, $r->name, $r->birthday, $r->address, $r->phone);
            }
        } catch (PDOException $ex) {
            die("error: {$ex->getMessage()}");
        }
        return $result;
    }

    public function getAllFriends(): array {
        $result = [];
        try{
            $sql = "select * from friend";
            $q= PDOUtils::getMySQLConnection()->prepare($sql);
            $q->execute();
            while($r=$q->fetch()){
                $result[] = new Friend($r->id, $r->name, $r->birthday, $r->address, $r->phone);
            }
        } catch (PDOException $ex) {
            die("error: {$ex->getMessage()}");
        }
        return $result;
    }

    public function insert(\Friend $f): void {
        try{
            $sql = "insert into friend values(?,?,?,?,?)";
            PDOUtils::getMySQLConnection()->prepare($sql)->execute([$f->getId(), $f->getName(), $f->getBirthday(), $f->getAddress(), $f->getPhone()]);
        } catch (PDOException $ex) {
            die("error: {$ex->getMessage()}");
        }
        
    }

    public function update(\Friend $f): void {
        try{
            $sql = "update friend set name=?, birthday=?, address=?, phone=? where id=?";
            PDOUtils::getMySQLConnection()->prepare($sql)->execute([$f->getName(), $f->getBirthday(), $f->getAddress(), $f->getPhone(), $f->getId()]);
        } catch (PDOException $ex) {
            die("error: {$ex->getMessage()}");
        }
    }

}
