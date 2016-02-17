<?php

namespace StoreBundle\Controller;

use StoreBundle\Document\Description;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use StoreBundle\Document\Product;
use StoreBundle\Form\ProductType;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Product controller.
 */
class ProductController extends Controller
{
    /**
     * Lists all Product documents.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $dm = $this->getDocumentManager();

        $documents = $dm->getRepository('StoreBundle:Product')->findAll();

        return $this->render('StoreBundle:Product:index.html.twig', array('documents' => $documents));
    }

    /**
     * Displays a form to create a new Product document.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function newAction()
    {
        $document = new Product();
        $form = $this->createForm(new ProductType(), $document);

        return $this->render('StoreBundle:Product:new.html.twig', array(
            'document' => $document,
            'form'     => $form->createView()
        ));
    }

    /**
     * Creates a new Product document.
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createAction(Request $request)
    {
        $document = new Product();
        $form     = $this->createForm(new ProductType(), $document);
        $form->bind($request);

        if ($form->isValid()) {

            $dm = $this->getDocumentManager();



            $dm->persist($document);

//            dump($dm);
//            die();

            $dm->flush();

            return $this->redirect($this->generateUrl('product_show', array('id' => $document->getId())));
        }

        return $this->render('StoreBundle:Product:new.html.twig', array(
            'document' => $document,
            'form'     => $form->createView()
        ));
    }

    /**
     * Finds and displays a Product document.
     *
     * @param string $id The document ID
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException If document doesn't exists
     */
    public function showAction($id)
    {
        $dm = $this->getDocumentManager();

        $document = $dm->getRepository('StoreBundle:Product')->find($id);

        if (!$document) {
            throw $this->createNotFoundException('Unable to find Product document.');
        }

        $deleteForm = $this->createDeleteForm($id);


        return $this->render('StoreBundle:Product:show.html.twig', array(
            'document' => $document,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Product document.
     *
     * @param string $id The document ID
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException If document doesn't exists
     */
    public function editAction($id)
    {
        $dm = $this->getDocumentManager();

        $document = $dm->getRepository('StoreBundle:Product')->find($id);

//        dump($document);
//
//        die();

        if (!$document) {
            throw $this->createNotFoundException('Unable to find Product document.');
        }

        $editForm = $this->createForm(new ProductType(), $document);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('StoreBundle:Product:edit.html.twig', array(
            'document'    => $document,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Product document.
     *
     * @param Request $request The request object
     * @param string $id       The document ID
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException If document doesn't exists
     */
    public function updateAction(Request $request, $id)
    {

        $dm = $this->get('doctrine_mongodb')->getManager();
        $product = $dm->getRepository('StoreBundle:Product')->find($id);
        dump($product->getDescription());

        if (!$product) {
            throw $this->createNotFoundException('No product found for id '.$id);
        }
        
        $editForm = $this->createForm(new ProductType(), $product);
        $deleteForm = $this->createDeleteForm($id);
        
        
        $descriptions = $editForm->get('description')->getData();
        $descriptionsId = array();
        foreach ($product->getDescription() as $description) {

            $descriptionsIds[] = $description->getId();
        }
        
        dump($descriptionsIds);
        
        
        
        
        
        
        
        

        if ($editForm->isValid()) {
            $editForm->handleRequest($request);
//            $dm->persist($product);
            $dm->flush();

            return $this->redirect($this->generateUrl('product_edit', array('id' => $id)));
        }

        return $this->render('StoreBundle:Product:edit.html.twig', array(
            'document'    => $product,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
     }
        

//        $editForm = $this->createForm(new ProductType(), $product);
//        if ($request->isMethod('POST')) {
//            $editForm->handleRequest($request);
//            if ($editForm->isValid()) {

//                $descriptionsIds = array();
//                $formDescriptionsIds =array();

//                foreach ($product->getDescription() as $description) {
//
//                    $descriptionsIds[] = $description->getId();
//                }
//                $data = $editForm->get('description')->getData();
//                foreach ($data as $d) {
//                    $formDescriptionsIds[] = $d->getId();
//                }
//                $diffCollections = array_unique( array_values(array_merge($formDescriptionsIds, $descriptionsIds)));

//                $result = array_unique(array_merge($formDescriptionsIds, $descriptionsIds));
//                print_r($diffCollections);

//                foreach ($diffCollections as $diffCollection) {
//                    $descrip = $dm->getRepository('StoreBundle:Description')->find($diffCollection);
//
//                    $dm->remove($descrip);
//                    $dm->flush();

//                    if($descrip instanceOf \StoreBundle\Document\Description){
//
//                        $node = $descrip->getProductDescription();
//                        $items = $node->getDescription();
//                        dump($items);
//                        $items->removeElement($descrip);
//                        $class = $dm->getClassMetadata(get_class($node));
//                        $dm->getUnitOfWork()->recomputeSingleDocumentChangeSet($class, $node);
//                        $dm->flush();
//                    }
//                }
//


//                $product->getDescription();
//                $product->addDescription();
//                $product->removeDescription();


//                $dm->persist($product);
//                $dm->flush();
        

       


//        die();










//        $dm = $this->getDocumentManager();
//
//        $document = $dm->getRepository('StoreBundle:Product')->find($id);
//
//        if (!$document) {
//            throw $this->createNotFoundException('Unable to find Product document.');
//        }
//
//        $deleteForm = $this->createDeleteForm($id);
//        $editForm   = $this->createForm(new ProductType(), $document);
//        $editForm->submit($request->request->get($editForm->getName()));
//        dump( $editForm);

//        $originalTags = new ArrayCollection();
//        $data = $editForm->get('description')->getData();
//        foreach ($document->getDescription() as $dec) {
//            foreach ($data as $tag) {
//            if (false === $document->getDescription()->contains($tag)) {
//                $tag->setProductDescription(null);
//                $dm->persist($tag);
//            }
//
////            $document->removeDescription($tag);
////            $dm->persist($document);
//
//            dump($document->getDescription()->contains($tag));
//
//            }
//        }

//        $dm->persist($document);
//        $dm->flush();

//        dump($data);

//        $data = $request->request->all();
//        foreach ( $data['storebundle_producttype']['description'] as $description) {
//            dump($description);
//        }

//        die();


        
//    }

    /**
     * Deletes a Product document.
     *
     * @param Request $request The request object
     * @param string $id       The document ID
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException If document doesn't exists
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $dm = $this->getDocumentManager();
            $document = $dm->getRepository('StoreBundle:Product')->find($id);

            if (!$document) {
                throw $this->createNotFoundException('Unable to find Product document.');
            }

            $dm->remove($document);
            $dm->flush();
        }

        return $this->redirect($this->generateUrl('product'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }

    /**
     * Returns the DocumentManager
     *
     * @return DocumentManager
     */
    private function getDocumentManager()
    {
        return $this->get('doctrine.odm.mongodb.document_manager');
    }
}
