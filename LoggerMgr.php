<?php
   /**
    * Class writes in a log flow traces
    * The Logger is a singleton and it only instance one time in all program
    * The class returns the log4php object or class, it allows access to its methods
    * to write in the log.
    */
   
   require_once './log4php/Logger.php';
   
   class LoggerMgr{
      
      
      /*
       * Class const
       */
      /**
       * 
       * @var confFileC: The log configuration file.
       */
      const confFileC = "./cfg/Logger.xml";
      
      /*
       * Class properties
       */
      
      /**
       * 
       * @var instanceM: It is a instance of LoggerMgr that provides the object 
       * loggers.
       */
      protected static $instanceM = NULL;
      
      /*
       * Protected methods
       */
      
      /**
       * Constructor
       */
      protected function __construct(){
         
         //Initialize the log4php object
         Logger::configure(confFileC);
      }
   }
?>