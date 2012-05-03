<?php
     class Member extends Doctrine_Record
     {
         public function setTableDefinition()
         {
             $this->hasColumn('username', 'string', 30);
             $this->hasColumn('password', 'string', 30);
         }

         //public function setUp()
         //{
         //    $this->actAs('Timestampable');
         //}
     }
