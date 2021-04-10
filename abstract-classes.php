<?php
abstract class Manager
{
    abstract protected function showProject($project);
}

class Employee extends Manager
{
    public function showProject($project = "apple")
    {
        return "i am working on" . $project;
    }

    public function startProject($project)
    {
        return $this->showProject($project);
    }
}

$employee = new Employee();
echo $employee->startProject("orange");
