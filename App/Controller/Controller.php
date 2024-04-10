<?php

namespace App\Controller;

class Controller
{
    public function add_menu(){
        //Adding admin menu
        add_menu_page(
            esc_html__('CodeGround','codeground'),
            esc_html__('CodeGround','codeground'),
            'manage_options',
            'codeground',
            [$this, 'render_menu'],
            'dashicons-code-standards'
        );
    }
    public function render_menu(){
        wc_get_template(
            'View.php',
            array(
                'name' => "John Doe <script>alert('Hello');</script>"
            ),
            '',
            CG_PLUGIN_PATH.'App/View/'
        );
    }

    public function registerEndPoint(){
        register_rest_route('v5','/greet',
            array(
                'methods' => 'GET',
                'callback' => [$this,'getGreetings']
            ));
    }

    public function getGreetings($request)
    {
        $data = array(
            'message' =>'Hello world using MVC'
        );

        return rest_ensure_response($data);
    }
}
