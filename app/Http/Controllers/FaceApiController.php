<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaceApiController extends Controller {

    //detectFace
    public function detectFace(Request $request) {

        return response()->json([
            "error_code" => 0, 
            "error_msg" => "SUCCESS", 
            "log_id" => 3199740449, 
            "timestamp" => 1621410799, 
            "cached" => 0, 
            "result" => [
                  "face_num" => 1, 
                  "face_list" => [
                     [
                        "face_token" => "c4ca8a0285aec9a7aa223bc795536c46", 
                        "location" => [
                           "left" => 58.85, 
                           "top" => 160.5, 
                           "width" => 185, 
                           "height" => 172, 
                           "rotation" => 1 
                        ], 
                        "face_probability" => 1, 
                        "angle" => [
                              "yaw" => -9.06, 
                              "pitch" => 6.64, 
                              "roll" => 1.39 
                           ] 
                     ] 
                  ] 
               ] 
         ]);

    }

    public function identifyFace(Request $request) {

        return response()->json([
            "error_code" => 0, 
            "error_msg" => "SUCCESS", 
            "log_id" => 3219714885, 
            "timestamp" => 1621410819, 
            "cached" => 0, 
            "result" => [
                  "face_token" => "c1cf4c61086d823eda13e5823da50fa3", 
                  "user_list" => [
                     [
                        "group_id" => "testface", 
                        "user_id" => "f15c5dea_4bfa_4f6d_8b0c_167d6dbcbba0", 
                        "user_info" => "willy", 
                        "score" => 87.807579040527 
                     ],
                     [
                        "group_id" => "testface2", 
                        "user_id" => "e1cfb296_e696_4e95_8e67_52d4fda5ccaa", 
                        "user_info" => "abdul", 
                        "score" => 87.807579040527 
                     ],
                     [
                        "group_id" => "testface3", 
                        "user_id" => "06ad8019_47f6_43dd_bf9b_06febe560afb", 
                        "user_info" => "juzai", 
                        "score" => 87.807579040527 
                     ] 
                  ] 
               ] 
        ]);
    }


    public function addFace(Request $request) {
        return response()->json([
            "error_code" => 223105, 
            "error_msg" => "face is already exist", 
            "log_id" => 3231160867, 
            "timestamp" => 1621410831, 
            "cached" => 0, 
            "result" => null 
        ]);
    }

    public function liveness(Request $request) {
        return response()->json([
            "error_code" => 223105, 
            "error_msg" => "face is already exist", 
            "log_id" => 3231160867, 
            "timestamp" => 1621410831, 
            "cached" => 0, 
            "result" => null 
        ]);
    }

    public function getGroupList(Request $request) {
        return response()->json([
            "error_code" => 0, 
            "error_msg" => "SUCCESS", 
            "log_id" => 3253800315, 
            "timestamp" => 1621410853, 
            "cached" => 0, 
            "result" => [
                  "group_id_list" => [
                     "testface", 
                     "atw_customer", 
                     "atw_uat_customer", 
                     "atw_customer_uat", 
                     "atw_staff_uat" 
                  ], 
                  "group_option_list" => [
                        "LIVE", 
                        "LIVE", 
                        "LIVE", 
                        "LIVE", 
                        "LIVE" 
                     ] 
               ] 
        ]);
    }

}