<?php
    $config = array(
        'login' => array(
            array(
                'field' => 'login',
                'label' => 'Username',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required|md5'
            )
        )
    );

