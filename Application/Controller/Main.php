<?php

namespace Application\Controller {

    use Sohoa\Framework\Kit;

    class Main extends Kit
    {
        public function IndexAction()
        {
            $this->greut->render();
        }
        public function HelpAction()
        {
            $this->greut->render();
        }
    }
}
