<?php

include_once(dirname(__FILE__) . "/../config.php");

class db_book extends database_table {
    const STATUS_NORMAL = 0;
    const STATUS_DELETED = 1;

    private static $instance = null;
    public static function inst() {
        if (self::$instance == null)
            self::$instance = new db_book();
        return self::$instance;
    }

    public function __construct() {
        parent::__construct(MYSQL_DATABASE, MYSQL_PREFIX . "book");
    }

    public function get($id) {
        $id = (int)$id;
        return $this->get_one("id = $id");
    }

    public function getBook($bookid) {
        $bookid = (int)$bookid;
        return $this->get_one("bookid = $bookid");
    }

    public function all() {
        return $this->get_all();
    }

    public function add($bookid, $title, $avatar) {
        $bookid = (int)$bookid;
        $now = time();
        return $this->insert(array("bookid" => $bookid, "title" => $title, "avatar" => $avatar, "btime" => $now));
    }

    public function updateTitle($id, $title) {
        $id = (int)$id;
        return $this->update(array("title" => $title), "id = $id");
    }

    public function updateAvatar($id, $avatar) {
        $id = (int)$id;
        return $this->update(array("avatar" => $avatar), "id = $id");
    }

    public function remove($id) {
        $id = (int)$id;
        return $this->delete("id = $id");
    }

};


