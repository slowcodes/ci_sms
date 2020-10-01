<?php

function authorize($token){

    if($token==='123'){
        redirect('/login', true);
    }
}