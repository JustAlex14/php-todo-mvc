<?php
class TaskListController extends AbstractController {
  
  public function render () : void {
    echo get_template( __PROJECT_ROOT__ . "/Views/list.php", [
      'tasks' => $this->taskService->list([
        'orderBy' => $_GET["order-by"] ?? "createdAt",
        'order' => (($_GET["order-by"] ?? "createdAt") == "createdAt") ? "desc" : "asc",
        'search' =>  $_GET["search"] ?? null,
        'page' => $_GET["selecPage"] ?? 1,
        'perPage' => 10
        ])['tasks'],
      'totalTask' => $this->taskService->list([
        'orderBy' => $_GET["order-by"] ?? "createdAt",
        'order' => (($_GET["order-by"] ?? "createdAt") == "createdAt") ? "desc" : "asc",
        'search' =>  $_GET["search"] ?? null,
        'page' => $_GET["selecPage"] ?? 1,
        'perPage' => 10
        ])['total'],
    ] );
  }
  
}