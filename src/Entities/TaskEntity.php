<?php
    class TaskEntity {
        // Id
        public Int $id;

        // String
        public String $title;
        public String $description;

        // Boolean
        public Bool $completed;

        // Datetime
        public $createdAt;
        public $updatedAt;
        public $completedAt;

        // Setter/getter id
        function getId() { return $this->id; }
        function setId($id) { $this->id = $id; return $this; }

        // Setter/getter title
        function getTitle() { return $this->title; }
        function setTitle($title) { $this->title = $title; return $this; }

        // Setter/getter desc
        function getDescription() { return $this->description; }
        function setDescription($description) { $this->description = $description; return $this; }

        // Setter/getter complete
        function isCompleted() { return $this->completed; }
        function setCompleted($completed) { $this->completed = $completed; return $this; }


        // Setter/getter createat
        function getCreatedAt() { return $this->createdAt; }
        function setCreatedAt($createdAt) { 
            $this->createdAt = $createdAt; 
            $this->updatedAt = $createdAt;
            return $this; 
        }

        // Setter/getter updateat
        function getUpdatedAt() { return $this->updatedAt; }
        function setUpdatedAt($updatedAt) { $this->updatedAt = $updatedAt; return $this; }

        // Setter/getter completeat
        function getCompletedAt() { return $this->completedAt; }
        function setCompletedAt($completedAt) { $this->completedAt = $completedAt; return $this; }
    }
?>