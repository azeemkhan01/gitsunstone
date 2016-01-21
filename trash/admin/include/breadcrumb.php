<?php
//   function breadcrumbs($text = 'You are here: ', $sep = ' &raquo; ', $home = 'Home') {
//       //Use RDFa breadcrumb, can also be used for microformats etc.
//       $bc     =   '<div xmlns:v="http://rdf.data-vocabulary.org/#" id="crums">'.$text;
//       //Get the website:
//       $site   =   'http://'.$_SERVER['HTTP_HOST'];
//       //Get all vars en skip the empty ones
//       $crumbs =   array_filter( explode("/",$_SERVER["REQUEST_URI"]) );
//       //Create the home breadcrumb
//       $bc    .=   '<span typeof="v:Breadcrumb"><a href="'.$site.'" rel="v:url" property="v:title">'.$home.'</a>'.$sep.'</span>'; 
//       //Count all not empty breadcrumbs
//       $nm     =   count($crumbs);
//       $i      =   1;
//       //Loop the crumbs
//       foreach($crumbs as $crumb){
//           //Make the link look nice
//           $link    =  ucfirst( str_replace( array(".php","-","_"), array(""," "," ") ,$crumb) );
//           //Loose the last seperator
//           $sep     =  $i==$nm?'':$sep;
//           //Add crumbs to the root
//           $site   .=  '/'.$crumb;
//           //Make the next crumb
//           $bc     .=  '<span typeof="v:Breadcrumb"><a href="'.$site.'" rel="v:url" property="v:title">'.$link.'</a>'.$sep.'</span>';
//           $i++;
//       }
//       $bc .=  '</div>';
//       //Return the result
//       return $bc;
//     }
// echo breadcrumbs();
/**
 *
 * @Create Breadcrumbs Trail.
 *
 * @copyright Copyright (C) 2008 PHPRO.ORG. All rights reserved.
 *
 * @version //autogentag//
 *
 * @license new bsd http://www.opensource.org/licenses/bsd-license.php
 *
 * @filesource
 *
 * @package Breadcrumbs
 *
 * @Author Kevin Waterson
 *
 */

class breadcrumbs{

    /*
     * @string $breadcrumbs
     */
    public $breadcrumbs;

    /*
     * @string $pointer
     */
    private $pointer = '&raquo;';

    /*
     * @string $url
     */
    private $url;

    /*
     * @array $parts
     */
    private $parts;


    /*
     * @constructor - duh
     *
     * @access public
     *
     */
    public function __construct()
    {
        $this->setParts();
        $this->setURL();
        $this->breadcrumbs = '<a href="'.$this->url.'">Home</a>';
    }


    /*
     *
     * @set the base url
     *
     * @access private
     *
     */
    private function setURL()
    {
        $protocol = $_SERVER["SERVER_PROTOCOL"]=='HTTP/1.1' ? 'http' : 'https';
        $this->url = $protocol.'://'.$_SERVER['HTTP_HOST'];
    }


    /*
     * @set the pointer 
     *
     * @access public
     *
     * @param string $pointer
     * 
     */
    public function setPointer($pointer)
    {
        $this->pointer = $pointer;
    }


    /**
     *
     * @set the path array
     *
     * @access private
     *
     * @return array
     *
     */
    private function setParts()
    {
        $parts = explode('/', $_SERVER['REQUEST_URI']);
        array_pop($parts);
        array_shift($parts);
    $this->parts = $parts;
    }


    /**
     *
     * @create the breadcrumbs
     *
     * @access public
     *
      */
    public function crumbs()
    {
        foreach($this->parts as $part)
        {
            $this->url .= "/$part";
            $this->breadcrumbs .= " $this->pointer ".'<a href="'.$this->url.'">'.$part.'</a>';
        }
    }

} /*** end of class ***/

 ?>