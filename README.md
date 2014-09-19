LoggerMgr
=========

Manager to provide Loggers of the log4php type to write applications logs files.

How use it
==========

Copy the directories structure and the LoggerMgr in your project.

The LoggerMgr is a singleton, to access to a log4php write:
LoggerMgr::Instance()->getLogger("LoggerName");

The "LoggerName" must be changed per the logger name which you want to use.

Configuration
=============

The configuration file is in cfg/LoggerMgr.xml

In that file your must write the loggers configuration of your application.

See http://logging.apache.org/log4php/docs/configuration.html

