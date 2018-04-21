<?php

/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 20/04/2018
 * Time: 21:10
 */
class Controller
{
    //each of the actions, created for the controller, can have their own views
    protected $view;

    //define view for individual actions
    //$data = values that you want to pass to the view. Create empty array incase value is not passed

    /*
     * Why is there a method view and a new class view?
     * The class view simply constructs the view
     * The view() method in Controller() will allow us to pass data to the view method(), and manipulate data
     * After desired data is passed inside the view() method, the View() class is called
     * A new view (page) is created
     * This is primarily done as a separation of logic and concerns
     */
    public function view($viewName, $data = []){
        // you can create much more properties and methods for a view, so for that reason, I will create a new class called View() this is simply done to seperate logic as can be seen later
        $this->view = new View($viewName, $data);
        return $this->view;

    }
}