<?php if (!defined('IF_AUTHORIZED')) { die('Unauthorized Access!'); }

class Controller {
    protected $db;
    protected $console;
    protected $req;

    function __construct() {
        require_once __DIR__ . '/lib/database.class.php';
        require_once __DIR__ . '/lib/console.class.php';
        require_once __DIR__ . '/lib/request.class.php';
        $this->db = new Database(MYSQL_HOST, MYSQL_PORT, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE, MYSQL_CODING);
        $this->console = new Console(LOG_PATH, LOG_FILE);
        $this->req = new Request('GET');
    }

    /**
     * 控制器入口，根据action路由到各个接口
     */
    public function main() {
        $action = 'action_' . $this->req->action;
        if (!method_exists($this, $action)) {
            $this->show_server_error('Request action does not exist.');
        }
        call_user_func(array($this, $action));
    }

    /***************************************************************
     * Actions
     ***************************************************************/

    public function action_demo() {
        $this->console->debug('"demo" start');

        require_once __DIR__ . '/action/action_demo.php';

        $this->console->debug('"demo" end' . "\n");
    }
} // END

/* END file */
?>