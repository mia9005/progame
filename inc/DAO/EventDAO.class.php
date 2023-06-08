<?php

class EventDAO {
    private static $db;

    public static function startDb(){
        self::$db = new PDOService("StoreEvent");
    }

    public static function getAllTheEvents() {
        $sql = "SELECT * FROM storeevent";

        self::$db->query($sql);

        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function getEventByUserId( int $userId ){
        $sql = "SELECT * FROM storeevent WHERE userId =:userId";
        // $sql = "SELECT * FROM storeevent WHERE customeId =:userId";

        self::$db->query($sql);
        self::$db->bind(":userId", $userId);
        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function insetNewEvent(StoreEvent $newEvent) {
        $sql = "INSERT INTO storeevent (userId, title, eventDate, details) VALUES (:userId, :title,:eventDate,:details)";
        // $sql = "INSERT INTO storeevent (customerId, title, eventDate, details) VALUES (:userId, :title,:eventDate,:details)";

        self::$db->query($sql);
        self::$db->bind(":userId",$newEvent->getUserId());
        self::$db->bind(":title",$newEvent->getTitle());
        self::$db->bind(":eventDate",$newEvent->getEventDate());
        self::$db->bind(":details",$newEvent->getDetails());

        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    public static function getSingleEvent( int $eventId ) {
        $sql = "SELECT * FROM storeevent WHERE eventId = :eventId";

        self::$db->query($sql);
        self::$db->bind(":eventId",$eventId);
        self::$db->execeute();

        return self::$db->singleResult();
    }

    
}