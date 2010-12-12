<?php
/**
 * Хранилище объектов баз данных
 *
 * @package    go\DB
 * @subpackage Storage
 * @author     Григорьев Олег aka vasa_c
 */

namespace go\DB;

final class Storage
{

/*** STATIC: ***/

    /**
     * Получить центральный объект хранилища
     *
     * @return \go\DB\Storage
     */
    public static function getInstance() {

    }

    /**
     * Установить центральный объект хранилища
     * 
     * @param mixed $instance
     *        экземпляр хранилища или параметры баз для заполнения
     * @return \go\DB\Storage
     */
    public static function setInstance($instance) {

    }

    /**
     * Запрос к центральной базе центрального хранилища
     * 
     * @throws \go\DB\Exceptions\StorageDBCentral
     *         нет центральной базы
     * @throws \go\DB\Exceptions\Connect
     * @throws \go\DB\Exceptions\Closed
     * @throws \go\DB\Exceptions\Templater
     * @throws \go\DB\Exceptions\Query
     * @throws \go\DB\Exceptions\Fetch
     *
     * @param string $pattern
     * @param array $data [optional]
     * @param string $fetch [optional]
     * @param string $prefix [optional]
     */
    public static function query($pattern, $data = null, $fetch = null, $prefix = null) {
        
    }
    
/*** PUBLIC: ***/

    /**
     * Конструктор хранилища
     *
     * @throws \go\DB\Exceptions\StorageAssoc
     *         ошибка ассоциации при заполнении
     * 
     * @param array $mparams [optional]
     *        параметры для заполнения (не указаны - пустое хранилище)
     */
    public function __construct($mparams = null) {

    }

    /**
     * Получить объект базы по имени
     *
     * @throws \go\DB\Exceptions\StorageNotFound
     *         нет такой базы
     *
     * @param string $name [optional]
     * @return \go\DB\DB
     */
    public function get($name = null) {
        
    }

    /**
     * Создать объект базы и сохранить в хранилище
     *
     * @throws \go\DB\Exceptions\StorageEngaged
     *         данное имя уже занято
     * @throws \go\DB\Exceptions\Config
     * @throws \go\DB\Exceptions\Connect
     *
     * @param array $params
     *        параметры подключения
     * @param string $name [optional]
     *        имя в хранилище
     * @return \go\DB\DB
     *         объект созданной базы
     */
    public function create(array $params, $name = null) {

    }

    /**
     * Записать базу в хранилище
     *
     * @throws \go\DB\Exceptions\StorageEngaged
     *         данное имя уже занято
     *
     * @param \go\DB\DB $db
     *        объект базы
     * @param string $name
     *        имя в хранилище
     */
    public function set(DB $db, $name = null) {

    }

    /**
     * Заполнить хранилище создаваемыми базами
     *
     * @throws \go\DB\Exceptions\StorageAssoc
     *         ошибка ассоциации при заполнении
     * @throws \go\DB\Exceptions\StorageEngaged
     *         одно из имён уже занято
     *
     * @param array $mparams
     *        параметры баз данных
     */
    public function fill(array $mparams) {

    }

    /**
     * Существует ли уже в хранилище база с указанным именем
     *
     * @param string $name
     * @return bool
     */
    public function exists($name = null) {
        
    }

    /**
     * Вызов хранилища, как функции - запрос к центральной базе хранилища
     * 
     * @throws \go\DB\Exceptions\StorageDBCentral
     * @throws \go\DB\Exceptions\Connect
     * @throws \go\DB\Exceptions\Closed
     * @throws \go\DB\Exceptions\Templater
     * @throws \go\DB\Exceptions\Query
     * @throws \go\DB\Exceptions\Fetch
     *
     * @param string $pattern [optional]
     * @param array $data [optional]
     * @param string $fetch [optional]
     * @param string $prefix [optional]
     */
    public function __invoke($pattern, $data = null, $fetch = null, $prefix = null) {

    }

    /**
     * @override magic method
     *
     * @example $db = $storage->dbname
     *
     * @throws \go\DB\Exceptions\StorageNotFound
     *
     * @param string $name
     * @return \go\DB\DB
     */
    public function __get($name) {

    }

    /**
     * @override magic method
     *
     * @example $storage->dbname = $db
     *
     * @throws \go\DB\Exceptions\StorageEngaged
     *
     * @param string $name
     * @param \go\DB\DB $value
     */
    public function __set($name, $value) {
        
    }

    /**
     * @override magic method
     *
     * @example isset($storage->dbname)
     *
     * @param string $name
     * @return bool
     */
    public function __isset($name) {

    }
    
/*** PRIVATE: ***/
    
/*** VARS: ***/

}