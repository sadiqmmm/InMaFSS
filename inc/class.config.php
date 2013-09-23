<?php
/*=================================================================================*\
|* This file is part of InMaFSS                                                    *|
|* InMaFSS - INformation MAnagement for School Systems - Keep yourself up to date! *|
|* ############################################################################### *|
|* Copyright (C) flx5                                                              *|
|* E-Mail: me@flx5.com                                                             *|
|* ############################################################################### *|
|* InMaFSS is free software; you can redistribute it and/or modify                 *|
|* it under the terms of the GNU Affero General Public License as published by     *|
|* the Free Software Foundation; either version 3 of the License,                  *|
|* or (at your option) any later version.                                          *|
|* ############################################################################### *|
|* InMaFSS is distributed in the hope that it will be useful,                      *|
|* but WITHOUT ANY WARRANTY; without even the implied warranty of                  *|
|* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.                            *|
|* See the GNU Affero General Public License for more details.                     *|
|* ############################################################################### *|
|* You should have received a copy of the GNU Affero General Public License        *|
|* along with InMaFSS; if not, see http://www.gnu.org/licenses/.                   *|
\*=================================================================================*/

class config {
    private $dbtype;
    private $dbhost;
    private $dbusr;
    private $dbpass;
    private $dbname;
    private $salt;
    private $apikey;
    private $lang;
    private $auto_addition;
    private $time_for_next_page;
    private $teacher_time_for_next_page;
    private $use_ftp;
    private $ftp;
    private $system;
    private $spalten_t = Array('200px', '30px', '100px', '75px', '*');
    private $spalten = Array('75px', '75px', '30px', '180px', '75px', '*');

    public function config() {
         include(CWD."inc/config.php");
         $this->dbtype = $dbtype;
         $this->dbhost = $dbhost;
         $this->dbusr = $dbusr;
         $this->dbpass = $dbpass;
         $this->dbname = $dbname;
         $this->salt = $salt;
         $this->apikey = $apikey;
         $this->lang = $lang;
         $this->auto_addition = $auto_addition;
         $this->time_for_next_page = $time_for_next_page;
         $this->teacher_time_for_next_page = $teacher_time_for_next_page;
         $this->use_ftp = $use_ftp;
         $this->ftp = $ftp;
         $this->system = $system;
    }

    public function Get($var) {
         return $this->$var;
    }
}
?>