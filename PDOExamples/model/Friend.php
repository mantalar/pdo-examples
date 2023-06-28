<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Friend
 *
 * @author me
 */
class Friend implements JsonSerializable{
    private ?int $id;
    private string $name;
    private ?string $birthday;
    private string $address;
    private string $phone;
    
    public function __construct(?int $id, string $name, ?string $birthday, string $address, string $phone) {
        $this->id = $id;
        $this->name = $name;
        $this->birthday = $birthday;
        $this->address = $address;
        $this->phone = $phone;
    }
    
    public function getId(): ?int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }
    
    public function getBirthday(): ?string {
        return $this->birthday;
    }

    public function getAddress(): string {
        return $this->address;
    }

    public function getPhone(): string {
        return $this->phone;
    }

    public function __toString() {
        return "id: {$this->id}, name: {$this->name}, birthday: {$this->birthday}, address: {$this->address}, phone: {$this->phone}";
    }

    public function jsonSerialize(): mixed {
        $data['id'] = $this->getId();
        $data['name'] = $this->getName();
        $data['birthday'] = $this->getBirthday();
        $data['address'] = $this->getAddress();
        $data['phone'] = $this->getPhone();
        return $data;
    }

}
