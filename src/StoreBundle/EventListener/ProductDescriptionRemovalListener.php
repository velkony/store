<?php

//namespace StoreBundle\EventListener\Entity;
//
//use Doctrine\ODM\MongoDB\Event\LifecycleEventArgs;
//use StoreBundle\Document\Product;
//use StoreBundle\Document\Description;
//use Symfony\Component\HttpFoundation\Request;
//
//class ProductDescriptionRemovalListener {
//   
//    public function preUpdate(Request $request, LifecycleEventArgs $event)
//    {
//        $document = $event->getDocument();
//        $data = $request->request->all();
//        foreach ( $data['storebundle_producttype']['description'] as $description) {
//            dump($description);
//        }
//
//        if ($document instanceof Product) {
//            $description = $document->getDescription(); 
//            $event
//                ->getDocumentManager()
//                ->getRepository('StoreBundle:Product')
//                ->removeDescription($document);
//        }
//    }
    
}
