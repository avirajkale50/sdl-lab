class Controller {
    protected $request;
    protected $response;

    public function __construct($request, $response) {
        $this->request = $request;
        $this->response = $response;
    }

    public function render($view, $data = []) {
        extract($data);
        include "../views/{$view}.php";
    }

    public function redirect($url) {
        header("Location: $url");
        exit();
    }
}