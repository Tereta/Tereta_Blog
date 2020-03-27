<?php
/**
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░                                                                                                                                           ░
 * ░     ████████╗███████╗██████╗░███████╗████████╗░█████╗░    ░█████╗░██╗░░░░░███████╗██╗░░██╗░█████╗░███╗░░██╗██████╗░███████╗██████╗░       ░
 * ░     ╚══██╔══╝██╔════╝██╔══██╗██╔════╝╚══██╔══╝██╔══██╗    ██╔══██╗██║░░░░░██╔════╝╚██╗██╔╝██╔══██╗████╗░██║██╔══██╗██╔════╝██╔══██╗       ░
 * ░     ░░░██║░░░█████╗░░██████╔╝█████╗░░░░░██║░░░███████║    ███████║██║░░░░░█████╗░░░╚███╔╝░███████║██╔██╗██║██║░░██║█████╗░░██████╔╝       ░
 * ░     ░░░██║░░░██╔══╝░░██╔══██╗██╔══╝░░░░░██║░░░██╔══██║    ██╔══██║██║░░░░░██╔══╝░░░██╔██╗░██╔══██║██║╚████║██║░░██║██╔══╝░░██╔══██╗       ░
 * ░     ░░░██║░░░███████╗██║░░██║███████╗░░░██║░░░██║░░██║    ██║░░██║███████╗███████╗██╔╝╚██╗██║░░██║██║░╚███║██████╔╝███████╗██║░░██║       ░
 * ░     ░░░╚═╝░░░╚══════╝╚═╝░░╚═╝╚══════╝░░░╚═╝░░░╚═╝░░╚═╝    ╚═╝░░╚═╝╚══════╝╚══════╝╚═╝░░╚═╝╚═╝░░╚═╝╚═╝░░╚══╝╚═════╝░╚══════╝╚═╝░░╚═╝       ░
 * ░                                                                                                                                           ░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░      █████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗       ░
 * ░      ╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝       ░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░                                                                                                                                           ░
 * ░        ░██╗░░░░░░░██╗░██╗░░░░░░░██╗░██╗░░░░░░░██╗░░░████████╗███████╗██████╗░███████╗████████╗░█████╗░░░░██████╗░███████╗██╗░░░██╗        ░
 * ░        ░██║░░██╗░░██║░██║░░██╗░░██║░██║░░██╗░░██║░░░╚══██╔══╝██╔════╝██╔══██╗██╔════╝╚══██╔══╝██╔══██╗░░░██╔══██╗██╔════╝██║░░░██║        ░
 * ░        ░╚██╗████╗██╔╝░╚██╗████╗██╔╝░╚██╗████╗██╔╝░░░░░░██║░░░█████╗░░██████╔╝█████╗░░░░░██║░░░███████║░░░██║░░██║█████╗░░╚██╗░██╔╝        ░
 * ░        ░░████╔═████║░░░████╔═████║░░░████╔═████║░░░░░░░██║░░░██╔══╝░░██╔══██╗██╔══╝░░░░░██║░░░██╔══██║░░░██║░░██║██╔══╝░░░╚████╔╝░        ░
 * ░        ░░╚██╔╝░╚██╔╝░░░╚██╔╝░╚██╔╝░░░╚██╔╝░╚██╔╝░██╗░░░██║░░░███████╗██║░░██║███████╗░░░██║░░░██║░░██║██╗██████╔╝███████╗░░╚██╔╝░░        ░
 * ░        ░░░╚═╝░░░╚═╝░░░░░╚═╝░░░╚═╝░░░░░╚═╝░░░╚═╝░░╚═╝░░░╚═╝░░░╚══════╝╚═╝░░╚═╝╚══════╝░░░╚═╝░░░╚═╝░░╚═╝╚═╝╚═════╝░╚══════╝░░░╚═╝░░░        ░
 * ░                                                                                                                                           ░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 *
 * See COPYING.txt for license details.
 * Copyright © 2020 Tereta Alexander. All rights reserved.
 * Contacts:
 *     tereta@mail.ua
 *     www.tereta.dev
 */

namespace Tereta\Blog\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\UrlRewrite\Model\UrlFinderInterface;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;
use Magento\Framework\Model\ResourceModel\AbstractResource;
use Magento\Framework\Data\Collection\AbstractDb;
use Magento\UrlRewrite\Service\V1\Data\UrlRewrite;
use Magento\UrlRewrite\Model\UrlRewriteFactory;
use Magento\UrlRewrite\Model\UrlPersistInterface;
use Magento\Store\Model\StoreManagerInterface;

/**
 * Tereta\Blog\Model\RewriteUrl
 *
 * Class RewriteUrl
 * @package Tereta\Blog\Model
 */
class RewriteUrl extends AbstractModel
{
    const ENTITY_TYPE_BLOG = 'tereta-blog';
    const ENTITY_TYPE_POST = 'tereta-blog-post';

    /**
     * @var UrlFinderInterface
     */
    protected $urlFinder;

    /**
     * @var UrlRewriteFactory
     */
    protected $urlRewriteFactory;

    /**
     * @var UrlPersistInterface
     */
    protected $urlPersist;

    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    /**
     * RewriteUrl constructor.
     * @param StoreManagerInterface $storeManager
     * @param UrlPersistInterface $urlPersist
     * @param UrlRewriteFactory $urlRewriteFactory
     * @param UrlFinderInterface $urlFinder
     * @param Context $context
     * @param Registry $registry
     * @param AbstractResource|null $resource
     * @param AbstractDb|null $resourceCollection
     * @param array $data
     */
    public function __construct(
        StoreManagerInterface $storeManager,
        UrlPersistInterface $urlPersist,
        UrlRewriteFactory $urlRewriteFactory,
        UrlFinderInterface $urlFinder,
        Context $context,
        Registry $registry,
        AbstractResource $resource = null,
        AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        $this->storeManager = $storeManager;
        $this->urlPersist = $urlPersist;
        $this->urlFinder = $urlFinder;
        $this->urlRewriteFactory = $urlRewriteFactory;

        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * @param $string
     * @param $storeId
     * @param null $prefix
     * @param bool $checkDb
     * @return false|string|string[]|void|null
     */
    public function generateUrlKey($string, $storeId, $prefix = null, $checkDb = false)
    {
        if (!$string){
            return;
        }

        $string = trim($string);
        $string = mb_strtolower($string);

        $charMap = array(
            mb_chr(1072) => 'a', mb_chr(1073) => 'b', mb_chr(1074) => 'v', mb_chr(1075) => 'g', mb_chr(1076) => 'd', mb_chr(1077) => 'e', mb_chr(1105) => 'e', mb_chr(1078) => 'j',
            mb_chr(1079) => 'z', mb_chr(1080) => 'i', mb_chr(1081) => 'y', mb_chr(1082) => 'k', mb_chr(1083) => 'l', mb_chr(1084) => 'm', mb_chr(1085) => 'n', mb_chr(1086) => 'o',
            mb_chr(1087) => 'p', mb_chr(1088) => 'r', mb_chr(1089) => 's', mb_chr(1090) => 't', mb_chr(1091) => 'u', mb_chr(1092) => 'f', mb_chr(1093) => 'h', mb_chr(1094) => 'c',
            mb_chr(1095) => 'ch', mb_chr(1096) => 'sh', mb_chr(1097) => 'shch', mb_chr(1099) => 'y', mb_chr(1101) => 'e', mb_chr(1102) => 'yu', mb_chr(1103) => 'ya',
            mb_chr(1098) => '', mb_chr(1100) => '',
        );

        $string = strtr($string, $charMap);
        $string = preg_replace('/[^a-z0-9_.]/Usi', '-', $string);

        if ($prefix){
            $string = $prefix . '/' . $string;
        }

        if ($checkDb){
            $string = $this->checkAppendUri($string, $storeId);
        }

        return $string;
    }

    /**
     * @param $entityType
     * @param $id
     */
    public function clear($entityType, $id)
    {
        if (!$id){
            return;
        }

        $filterData = [
            UrlRewrite::ENTITY_TYPE => $entityType,
            UrlRewrite::ENTITY_ID => $id,
            UrlRewrite::IS_AUTOGENERATED => 1
        ];
        $rewrites = $this->urlPersist->deleteByData($filterData);
    }

    /**
     * @param $entityType
     * @param $id
     * @param $url
     * @param $storeId
     * @throws \Exception
     */
    public function create($entityType, $id, $url, $storeId)
    {
        $urlRewrite = $this->urlRewriteFactory->create();
        $urlRewrite->setEntityType($entityType);
        $urlRewrite->setEntityId($id);
        $urlRewrite->setRedirectType(0);
        $urlRewrite->setStoreId($storeId);
        $urlRewrite->setIsAutogenerated(1);
        $urlRewrite->setRequestPath($url);
        switch ($entityType){
            case(static::ENTITY_TYPE_BLOG):
                $urlRewrite->setTargetPath('tereta_blog/blog/view/blog_id/' . $id);
                break;
            case(static::ENTITY_TYPE_POST):
                $urlRewrite->setTargetPath('tereta_blog/post/view/post_id/' . $id);
                break;
        }

        $filterData = [
            UrlRewrite::ENTITY_TYPE      => $urlRewrite->getEntityType(),
            UrlRewrite::ENTITY_ID        => $urlRewrite->getEntityId(),
            UrlRewrite::REDIRECT_TYPE    => $urlRewrite->getRedirectType(),
            UrlRewrite::STORE_ID         => $urlRewrite->getStoreId(),
            UrlRewrite::IS_AUTOGENERATED => $urlRewrite->getIsAutogenerated(),
            UrlRewrite::TARGET_PATH      => $urlRewrite->getTargetPath()
        ];

        $rewrite = $this->urlFinder->findOneByData($filterData);
        if ($rewrite) {
            $urlRewrite->setUrlRewriteId($rewrite->getUrlRewriteId());
        }

        $urlRewrite->save();
    }

    /**
     * @param $uri
     * @param $storeId
     * @return UrlRewrite|null
     */
    public function getByUrl($requestPath, $storeId)
    {
        $filterData = [
            UrlRewrite::REQUEST_PATH => $requestPath,
            UrlRewrite::STORE_ID => $storeId
        ];
        $rewrite = $this->urlFinder->findOneByData($filterData);
        return $rewrite;
    }

    /**
     * @param $targetPath
     * @param $storeId
     * @return UrlRewrite|null
     */
    public function getByTarget($targetPath, $storeId)
    {
        $filterData = [
            UrlRewrite::TARGET_PATH => $targetPath,
            UrlRewrite::STORE_ID => $storeId
        ];
        $rewrite = $this->urlFinder->findOneByData($filterData);
        return $rewrite;
    }

    /**
     * @param $targetPath
     * @param $storeId
     * @return string
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getUrlByTarget($targetPath, $storeId)
    {
        $rewriteModel = $this->getByTarget($targetPath, $storeId);

        if (!$rewriteModel->getRequestPath()){
            return $this->storeManager->getStore($storeId)->getBaseUrl() . $targetPath;
        }

        return $this->storeManager->getStore($storeId)->getBaseUrl() . $rewriteModel->getRequestPath();
    }

    /**
     * @param $nativeUri
     * @param $storeId
     * @param null $uri
     * @param null $append
     * @return string|null
     */
    protected function checkAppendUri($nativeUri, $storeId, $uri = null, $append = null)
    {
        if (!$uri) {
            $uri = $nativeUri;
        }

        $filterData = [
            UrlRewrite::REQUEST_PATH => $uri,
            UrlRewrite::STORE_ID => $storeId
        ];
        $rewrite = $this->urlFinder->findOneByData($filterData);
        if ($rewrite) {
            $urlExtension = '.html';
            $rand = rand(0, 9);
            $append = $append . $rand;
            if (substr($nativeUri, -strlen($urlExtension)) == $urlExtension){
                $urlClear = substr($nativeUri, 0, -strlen($urlExtension));
                if (substr($urlClear, -1) != '-'){
                    $urlClear = $urlClear . '-';
                }
                $uri = $this->checkAppendUri($nativeUri, $storeId, $urlClear . $append . $urlExtension, $append);
            }
            else {
                $uri = $nativeUri;
                if (substr($uri, -1) != '-'){
                    $uri = $uri . '-';
                }

                $uri = $this->checkAppendUri($nativeUri, $storeId, $uri . $append);
            }
        }

        return $uri;
    }
}