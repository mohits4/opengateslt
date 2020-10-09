<?php


namespace MoOauthClient;

interface OauthHandlerInterface
{
    public function get_token($fs, $zU, $B3, $N0);
    public function get_access_token($fs, $zU, $B3, $N0);
    public function get_id_token($fs, $zU, $B3, $N0);
    public function get_resource_owner_from_id_token($lo);
    public function get_resource_owner($Tx, $qJ);
    public function get_response($vo);
}
