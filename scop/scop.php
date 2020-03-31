<?php
// EMDB data files
class SCOPParser extends Bio2RDFizer
{
  function __construct($argv) {
    parent::__construct($argv,"nameofscript");
    // parameters are added like so
    parent::addParameter('param',true,null,'all',''); 
	// parameter name, required, not really sure, default value
	// set default dataset namespace
    parent:: initialize();
	//$param = parent::getParameterValue('parameter'); //getting a parameter
	//$file = parent::setReadFile('filename');
	//$outfile = parent::setWriteFile("path to file",true|false);
	//here the boolean is to set if the flag will be compressed or not
   }

  // set up the script. set the in directory and out directory etc
  function Run(){
   // handles downloading and iterating over input files, function calls to parse and convert input data into RDF
   // whatever you do to run the code
   $this->parse();
   return true;
  }
   // do what needs to be done to parse the data
   //convert input data to RDF using Bio2RDF API helper functions
  function parse(){
  }
}
$a = new BioRDFApp($argv);

// copied from tutorial
// helper functions are, e.g.:
/* getNamespace()
	getVoc()
	getRes()
	triplify($subject, $predicate, $object) - object is RDF resource
	triplifyString($subject, $predicate, "string") - object is a literal
	describeIndividual($uri, $label, $type, $title, $description, $language)
	describeClass(...)
	describeProperty(...)

*/

// generating the release file
/*$desc = $this->getBio2RDFDatasetDescription(
       $this->getNamespace(),
       "https://github.com/bio2rdf/bio2rdf-scripts/blob/master/affymetrix/affymetrix.php", 
       $bio2rdf_download_files,
       "http://affymetrix.com/",
       array("use-share-modify","no-commercial"),
       null, // license
       parent::getParameterValue('download_url'),
       parent::getDatasetVersion()
     );

$this->setWriteFile($odir.$this->getBio2RDFReleaseFile($this->getNamespace()));
     $this->getWriteFile()->write($desc);
     $this->getWriteFile()->close();
	 */
?>