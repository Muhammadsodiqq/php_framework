<?php

/**User: @Muhammadsodiqq ...*/

use app\core\Application;

/**
 * User: @Muhammadsodiqq
 * Date: 2022-27-05
 */

class m0003_status_nullable
{
    public function up()
    {
        $db = Application::$app->db;
        $SQL = "ALTER TABLE users modify status TINYINT DEFAULT 0";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = Application::$app->db;
        $SQL = "ALTER TABLE users CHANGE COLUMN status tinyint NOT NULL";
        $db->pdo->exec($SQL);
    }
}