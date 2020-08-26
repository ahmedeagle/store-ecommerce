<?php

 function getFolder(){

     return app() -> getLocale() == 'ar' ? 'css-rtl' : 'css';
}
