<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../UserController.php';

class UserControllerTest extends TestCase {
  public function testGetUsersReturnsArray() {
    $users = getUsers();
    $this->assertIsArray($users);
  }

  public function testGetUsersHasExpectedFields() {
    $users = getUsers();
    $firstUser = $users[0];
    $this->assertArrayHasKey('id', $firstUser);
    $this->assertArrayHasKey('name', $firstUser);
    $this->assertArrayHasKey('email', $firstUser);
  }

}
    
