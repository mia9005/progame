<?php

class StoreEvent {

    /**
     * @var integer
     */
    private int $eventId;

    /**
     * @var integer
     */
    private int $userId;

    /**
     * @var string
     */
    private string $title;

    /**
     * @var string
     */
    private string $eventDate;

    /**
     * @var string
     */
    private string $details;

    
    /**
     * Get the value of eventId
     *
     * @return int
     */
    public function getEventId(): int
    {
        return $this->eventId;
    }

    /**
     * Set the value of eventId
     *
     * @param int $eventId
     *
     * @return void
     */
    public function setEventId(int $eventId): void
    {
        $this->eventId = $eventId;
    }

     /**
     * Get the value of userId
     *
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     *
     * @param int $userId
     *
     * @return void
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * Get the value of eventDate
     *
     * @return string
     */
    public function getEventDate(): string
    {
        return $this->eventDate;
    }

     /**
     * Set the value of eventDate
     *
     * @param string $eventDate
     *
     * @return void
     */
    public function setEventDate(string $eventDate): void
    {
        $this->eventDate = $eventDate;
    }

    /**
     * Get the value of details
     *
     * @return string
     */
    public function getDetails(): string
    {
        return $this->details;
    }

    /**
     * Set the value of details
     *
     * @param string $details
     *
     * @return void
     */
    public function setDetails(string $details): void
    {
        $this->details = $details;
    }

    /**
     * Get the value of title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @param string $title
     *
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

}