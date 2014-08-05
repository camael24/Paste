<?php

namespace Application\Controller {

    use Sohoa\Framework\Kit;

    class User extends Kit
    {
        public function indexAction()
        {

        }

        public function showAction($user_id)
        {
            var_dump($user_id);
        }
    }
}
