<?php

namespace Application\Controller {

    use Sohoa\Framework\Kit;

    class Paste extends Kit
    {
        public function indexAction()
        {

            $model              = new \Application\Model\Paste();
            $this->data->lines  = $model->all();

            $this->greut->render();
        }

        public function newAction()
        {
            $this->greut->render();
        }

        public function showAction($paste_id)
        {
            $model = new \Application\Model\Paste();

            $data  = $model->get($paste_id);

            if ($data === false) {
                return $this->greut->render('hoa://Application/View/Notfound.tpl.php');
            }

            $this->data->id        = $data['idPaste'];
            $this->data->title     = $data['title'];
            $this->data->content   = $data['paste'];
            $this->data->time      = $data['time'];


            $this->greut->render();

        }

        public function createAction()
        {

            $agent = \Hoa\Http\Runtime::getHeader('User-Agent');
            $id    = sha1(time() . rand(0, 50));
            $model = new \Application\Model\Paste();

            if ($agent === 'Hoa') {

                $paste = \Hoa\Http\Runtime::getData();
                $title = 'Hello The World';
                $b     = $model->add($id, $paste, $title);

                if ($b === false) {
                    echo 'Ever exists! ';
                }
                echo 'http://' . \Hoa\Http\Runtime::getHeader('Host') . $this->router->unroute('show_Paste', array('paste_id' => $id));

                return;
            } else {

                $content = (isset($_POST['content']) and $_POST['content'] !== '') ? $_POST['content'] : '';
                $title   = (isset($_POST['title']) and $_POST['title'] !== '') ? $_POST['title'] : 'Sample';
                $b       = $model->add($id, $content, $title);
            }

            $this->flash->success('Success', 'Pastie create');
            $this->redirector->redirect('show_Paste', array('paste_id' => $id));
        }
    }
}
