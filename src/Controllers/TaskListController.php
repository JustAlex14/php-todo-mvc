<?php
class TaskListController extends AbstractController {
  
  public function render () : void {
    echo get_template( __PROJECT_ROOT__ . "/Views/list.php", [
      'tasks' => $this->taskService->list([
        'orderBy' => $_GET["order-by"] ?? "createdAt",
        'order' => ($_GET["order-by"] == "createdAt") ? "desc" : "asc",
        'search' =>  $_GET["search"] ?? null,
        ])['tasks']
    ] );
    var_dump($this->taskService->list([
        'orderBy' => $_GET["order-by"] ?? "createdAt",
        'order' => ($_GET["order-by"] == "createdAt") ? "desc" : "asc",
        'search' =>  $_GET["search"] ?? null,
        'page' => 3
        ])['page']
    );
  }
  
}