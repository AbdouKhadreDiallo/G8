<?php

    class EtudiantController extends Controller{
        protected $layout;
        protected $view;
        protected $data_view=[];
        protected $validator;


        public  function __construct(){
            $this->layout="defaut";
        }
    }