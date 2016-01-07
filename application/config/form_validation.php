<?php

$config = array(
    'digitalController/loginUser' => array(
        array(
            'field' => 'username',
            'label' => 'User Name',
            'rules' => 'required'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required'
        )
    ),
    'digitalController/uploadDocument' => array(
        array(
            'field' => 'subject',
            'label' => 'Subject',
            'rules' => 'required'
        ),
        array(
            'field' => 'sender',
            'label' => 'Sender',
            'rules' => 'required'
        ),
        array(
            'field' => 'keyword',
            'label' => 'Keyword',
            'rules' => 'required'
        )
    )
);
