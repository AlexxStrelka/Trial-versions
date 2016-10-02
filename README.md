
Installation

Add this bundle to your composer.json:

  $ php composer.phar require Alex/TestBundle:dev-master
Add this bundle to your application's kernel:

  // application/ApplicationKernel.php
  public function registerBundles()
  {
      return array(
          // ...
          new Alex\TestBundle\AlexTestBundle(),
          // ...
      );
  }
