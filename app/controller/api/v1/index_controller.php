<?php
include_once(dirname(__FILE__) . "/../../../config.php");
include_once(dirname(__FILE__) . "/../v1_base.php");

class plan_controller extends v1_base {
    public function update_action() {
        dump_var($_REQUEST);

        $bookid = get_request_assert("bookid");
        $title = get_request_assert("title");
        $data = get_request_assert("data");

        // logging::d("Debug", $bookid);
        // logging::d("Avatar", $avatar);
        // logging::d("Title", $title);

        return array("op" => "index.book", "data" => "");
    }


    public function update_action() {
        $userid = login::userid();
        $plan = get_request_assert("plan");

        if ($userid == 0) {
            return $this->result(v1_base::kRet_NotLogin);
        }

        $allowplan = (int)setting::instance()->load("KEY_ALLOW_PLAN");
        if ($allowplan == 0) {
            return $this->result(v1_base::kRet_Fail);
        }

        $ret = db_plan::inst()->update_user_plan($userid, $plan);
        // var_dump($plan);
        return $this->checkRet($ret);
    }

}













