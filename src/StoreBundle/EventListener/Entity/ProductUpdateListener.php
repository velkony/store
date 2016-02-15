<?php

namespace StoreBundle\EventListener\Entity;

use Doctrine\ODM\MongoDB\Event\LifecycleEventArgs;
use Doctrine\ODM\MongoDB\Event\PostFlushEventArgs;
use StoreBundle\Document\Product;
use StoreBundle\Document\Description;


class ProductUpdateListener {
    
    private $log = array();

    public function preUpdate(LifecycleEventArgs $args)
    {
        $document = $args->getDocument();
        
        if ($document instanceof Product) {
            
            $document->setName('Oste vednazh Bravo');
            $dm = $args->getDocumentManager();
            $class = $dm->getClassMetadata(get_class($document));
            $dm->getUnitOfWork()->recomputeSingleDocumentChangeSet($class, $document);
        }
        
    }
//
//    public function postFlush(\Doctrine\ODM\MongoDB\Event\PostFlushEventArgs $eventArgs)
//    {
//        $dm = $eventArgs->getDocumentManager();
//        $uow = $dm->getUnitOfWork();
//        // do something
//    }
}
