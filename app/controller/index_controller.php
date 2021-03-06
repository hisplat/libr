<?php
include_once(dirname(__FILE__) . "/../config.php");

class index_controller {

    public function wechathome_action() {
        $userinfo = get_request_assert("userinfo");
        $userinfo = base64_decode($userinfo);
        $userinfo = json_decode($userinfo, true);

        $_SESSION["userinfo"] = $userinfo;

        $bookid = $userinfo["request"]["bookid"];
        $openid = $userinfo["openid"];

        $record = db_book::inst()->getBook($bookid);
        $stat = 0;
        $title = "";
        $avatar = "";
        if (empty($record)) {
            $stat = 0;
        } else {
            if ($record["openid"] == $openid) {
                $stat = 2;
            } else {
                $stat = 1;
            }
            $title = $record["title"];
            $avatar = UPLOAD_URL . $record["avatar"];
        }

        $tpl = new tpl("header", "footer");
        $tpl->set("book.id", $bookid);
        $tpl->set("book.stat", $stat);
        $tpl->set("book.title", $title);
        $tpl->set("book.avatar", $avatar);
        $tpl->set("user.openid", $openid);
        $tpl->set("user.nickname", $userinfo["nickname"]);
        $tpl->set("user.headimgurl", $userinfo["headimgurl"]);
        $tpl->display("index/book");
    }


    public function index_action() {
        $tpl = new tpl("header", "footer");
        $tpl->display("index/index");
    }


    public function list_action() {
        $books = db_book::inst()->all();
        foreach ($books as $k => $v) {
            $books[$k]["avatarUrl"] = UPLOAD_URL . $v["avatar"];
        }
        return array("op" => "list", "data" => $books);
    }

    public function update_action() {
        $arg = get_request_assert("arg");
        $data = get_request_assert("data");

        $ret = Upload::uploadImageViaFileReader($data, function($filename, $arg) {
            $bookid = $arg["bookid"];
            $title = $arg["title"];
            $one = db_book::inst()->getBook($bookid);
            if (empty($one)) {
                $ret = db_book::inst()->add($bookid, $title, $filename);
            } else {
                $ret = false;
            }
            return $ret;
        }, $arg);

        return array("op" => "index.update", "data" => $ret);
    }

    public function borrow_action() {
        $userinfo = get_session_assert("userinfo");
        $bookid = $userinfo["request"]["bookid"];
        $openid = $userinfo["openid"];
        $nickname = $userinfo["nickname"];
        $headimgurl = $userinfo["headimgurl"];
 
        $ret = db_book::inst()->updateUserinfo($bookid, $openid, $nickname, $headimgurl);
        return array("op" => "index.borrow", "data" => $ret);
    }

    public function returnback_action() {
        $userinfo = get_session_assert("userinfo");
        $bookid = $userinfo["request"]["bookid"];
        $ret = db_book::inst()->updateUserinfo($bookid, null, null, null);
        return array("op" => "index.borrow", "data" => $ret);
    }

}













