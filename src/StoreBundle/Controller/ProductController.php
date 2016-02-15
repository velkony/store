<?php

namespace StoreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use StoreBundle\Document\Product;
use StoreBundle\Form\ProductType;

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
        $dm = $this->getDocumentManager();
        $document = $dm->getRepository('StoreBundle:Product')->find($id);
        $documentDescriptionsId = array();
        foreach ($document->getDescription() as $description) {
            $documentDescriptionsId[] = $description->getId();
        }
        
        if (!$document) {
            throw $this->createNotFoundException('Unable to find Product document.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm   = $this->createForm(new ProductType(), $document);
        $editForm->bind($request);

        
        $descriptions = $editForm->get('description')->getData();
        $requestDescriptionsId = array();
        
        foreach ($descriptions as $requestDescription) {
            $requestDescriptionsId[] = $requestDescription->getId();
        }
        $differenceIds = array_diff($documentDescriptionsId, $requestDescriptionsId); 
        
//        dump($documentDescriptionsId);
//        dump($requestDescriptionsId);
        $differenceIds = array_values($differenceIds);
        
        foreach ($differenceIds as $differenceId) {
            $doc = $dm->getRepository('StoreBundle:Description')->find($differenceId);
//            dump( $doc);
            $dm->remove($doc);
            $dm->flush();
        }
        
        if ($editForm->isValid()) {
            $dm->persist($document);
            $dm->flush();

            return $this->redirect($this->generateUrl('product_edit', array('id' => $id)));
        }

        return $this->render('StoreBundle:Product:edit.html.twig', array(
            'document'    => $document,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

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
