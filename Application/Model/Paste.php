<?php
namespace Application\Model {

    class Paste
    {
        private $_layer = null;

        public function __construct()
        {
            $this->_layer = \Hoa\Database\Dal::getLastInstance();
        }

        public function sql($statement, $data = array())
        {
            $statement = strval($statement);

            if (!empty($data)) {
                return  $this->_layer->prepare($statement)->execute($data);
            }

            return  $this->_layer->query($statement);
        }

        public function exists($id)
        {
            $sql = 'SELECT COUNT(*) FROM paste WHERE idPaste = :id';
            $smt = $this->sql($sql, array('id' => $id))->fetchColumn(0);

            return (intval($smt) > 0);
        }

        public function add($id, $content, $title = '')
        {
            $bool = $this->exists($id);

            if ($bool === true) {
                return false;
            }

            $insert = "INSERT INTO paste VALUES (:id, :title , :time, :content);";

            $this->sql($insert, array(
                   'id'       => $id,
                   'title'    => $title,
                   'time'     => time(),
                   'content'  => $content
            ));

            return $this->exists($id);

        }

        public function get($id)
        {
            $sql = 'SELECT * FROM paste WHERE idPaste = :id';
            $all = $this->sql($sql, array('id' => $id))->fetchAll();

            return (isset($all[0])) ? $all[0] : false;
        }

        public function all()
        {

            $sql = 'SELECT * FROM paste ORDER BY time DESC';
            $all = $this->sql($sql)->fetchAll();

            return $all;
        }
    }
}
