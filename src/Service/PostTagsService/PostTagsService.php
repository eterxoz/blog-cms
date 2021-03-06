<?php
/**
 * Created by PhpStorm.
 * User: eterxoz
 * Date: 27.12.18
 * Time: 20:43
 */

namespace App\Service\PostTagsService;
use App\Repository\PostTagsRepository\PostTagsRepositoryPrimaryInterface;
use App\Entity\Post;
use App\Entity\PostTags;
class PostTagsService implements PostTagsServiceInterface
{
    private $postTagsRepository;

    /**
     * PostTagsService constructor.
     * @param PostTagsRepositoryPrimaryInterface $postTagsRepository
     */
    public function __construct(PostTagsRepositoryPrimaryInterface $postTagsRepository)
    {
        $this->postTagsRepository = $postTagsRepository;
    }

    /**
     * @param Post $post
     * @param $tag
     */
    public function addTags(Post $post, $tag)
    {
        $this->postTagsRepository->addTags($post, $tag);
    }
}