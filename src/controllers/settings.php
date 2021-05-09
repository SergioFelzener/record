<?php 

session_start();
requireValidSession(true);

loadModel('Settings');


loadTemplateView('settings');
