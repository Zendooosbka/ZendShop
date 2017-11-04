<?php
/**
 * Created by PhpStorm.
 * User: eugeniy
 * Date: 20.10.17
 * Time: 8:18
 */

// Добавляет картинку в наш магазин
class AddPicture {
    // Сама картинка
    private $pict;

    // Имя картинки
    private $pictname;

    // Папка куда будут сохраняться картинки
    private $uploaddir;

    // Первоначальное имя файла
    private $uploadfile;

    // Тэг файла на странице
    private $filetag;

    // Возвращает имя картинки
    public function getPictname()
    {
        return $this->pictname;
    }

    // Конструктор класса, в качестве параметра берет добовляемую картинку
    public function __construct($picture, $filetag) {
        $this->pict = $picture;
        $this->filetag = $filetag;

        $this->uploaddir = $_SERVER['DOCUMENT_ROOT'].'/zendshop/pictures/';
        $this->uploadfile = $this->uploaddir.basename($this->pict['brandfile']['name']);

        $this->pictname = md5($this->uploaddir.basename($this->pict[$this->filetag]['name']).time());
    }

    public function AddPict() {
        return move_uploaded_file($this->pict[$this->filetag]['tmp_name'], $this->uploaddir.$this->pictname);
    }
}