<?php
function permission(){
    $ci = get_instance();
    $loggedUser = $ci ->session->userdata("logged_user");
    if(!$loggedUser){
        $ci->session->set_flashdata("danger", "voce precisa estar logado para acessar essta pagina");
        redirect("login");
    }
    return $loggedUser;

}