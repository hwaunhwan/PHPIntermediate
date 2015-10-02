<?php

//static is not used that much


class DatabaseManager
{

    /**
     * Should we cache data?
     * @var bool
     */
    public static $shouldCache; //in case saving it back to the DB
    /**
     * Get some data from the DB
     * @return array
     */
    public function getData()
    {
        //let's assume that this array is from a database
        return array('persian', 'bob', 'tabby', 'stray');
    }

    /**
     * Get some data from the DB....again
     * @return array
     */
    public static function getStaticData(){

        return array ('weiner', 'pug', 'beast', 'furry');
    }
}



$query = new DatabaseManager();
$data = $query->getData();

echo '<pre>';
print_r($data);

$staticData = DatabaseManager::getStaticData();
DatabaseManager::$shouldCache = true;
print_r($staticData);