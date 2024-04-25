<?php
class Page {
    private $template;

    public function __construct($template) {
        $this->template = file_get_contents($template);
    }

    public function Render($data) {
        foreach ($data as $key => $value) {
            $this->template = str_replace("{{$key}}", $value, $this->template);
        }
        return $this->template;
    }
}
?>
