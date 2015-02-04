<?php

class ForeachController extends BaseController {


  public function demo1() {
    $users = array();

    for($i=0; $i<10; $i++) {
      $item = array();
      $item['id'] = $i;
      $item['name'] = "Name-$i";
      $item['mac'] = 'mac';
      $item['imei'] = 'imei';
      $item['status'] = 'online';
      $item['created_at'] = '';
      $item['updated_at'] = '';
      $users[] = $item;
    }


    return View::make('foreach.demo1')->with('users', $users);
  }

  public function demo_if() {

    $users = array();

    for($i=0; $i<10; $i++) {
      $item = array();
      $item['id'] = $i;
      $item['name'] = "Name-$i";
      $item['mac'] = 'mac';
      $item['imei'] = 'imei';
      if ($i % 2 == 0) {
        $item['status'] = '1';
      } else {
        $item['status'] = '0';
      }

      $item['created_at'] = '';
      $item['updated_at'] = '';
      $users[] = $item;


    }
    return View::make('foreach.demo_if')->with('users', $users);

  }


}


